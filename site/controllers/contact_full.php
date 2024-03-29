<?php
return function($kirby, $page) {

    // Contact_full is probably the full file from the kirby docs
    // Will edit this to not include uploads at contact.php

    if ($kirby->request()->is('POST') && get('submit')) {

        // initialize variables
        $alerts      = null;
        $attachments = [];

        // check the honeypot
        if (empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        // get the data and validate the other form fields
        $data = [
            'name'      => get('name'),
            'email'     => get('email'),
            // 'reference' => get('reference'),
            'message'   => get('message')
        ];

        $rules = [
            'name'      => ['required', 'min' => 3],
            'email'     => ['required', 'email'],
            // 'reference' => ['required', 'in' => [page('jobs')->children()->listed()->pluck('reference', ',')]],
            'message'   => ['required', 'min' => 10, 'max' => 3000],
        ];

        $messages = [
            'name'      => 'Please enter a valid name.',
            'email'     => 'Please enter a valid email address.',
           // 'reference' => 'Please enter a valid reference.',
            'message'   => 'Please enter a text between 10 and 3000 characters.'
        ];

        // some of the data is invalid
        if ($invalid = invalid($data, $rules, $messages)) {
            $alerts = $invalid;
        }

        // get the uploads
        $uploads = $kirby->request()->files()->get('file');

        // we want no more than 3 files
        if (count($uploads) > 3) {
            $alerts[] = 'You may only upload up to 3 files.';
        }

        // loop through uploads and check if they are valid
        foreach ($uploads as $upload) {
            // make sure the user uploads at least one file
            if ($upload['error'] === 4) {
                $alerts[] = 'You have to attach at least one file';
            //  make sure there are no other errors  
            } elseif ($upload['error'] !== 0) {
                $alerts[] = 'The file could not be uploaded';
            // make sure the file is not larger than 2MB…    
            } elseif ($upload['size'] > 5000000)  {
                $alerts[] = $upload['name'] . ' is larger than 5 MB';
            // …and the file is a PDF
            // } elseif ($upload['type'] !== 'application/pdf') {
             //   $alerts[] = $upload['name'] . ' is not a PDF';
            // all valid, try to rename the temporary file
            } else {
                $name     = $upload['tmp_name'];
                $tmpName  = pathinfo($name);
                // sanitize the original filename
                $filename = $tmpName['dirname']. '/'. F::safeName($upload['name']);

                if (rename($upload['tmp_name'], $filename)) {
                    $name = $filename;
                }
                // add the files to the attachments array
                $attachments[] = $name;
            }  
        }

        // the data is fine, let's send the email with attachments
        if (empty($alerts)) {
            try {
                $kirby->email([
                    'template' => 'email',
                    'from'     => 'johnrose@johnrose-glass.com',
                    'replyTo'  => $data['email'],
                    'to'       => 'johnrose@johnrose-glass.com',
                    'subject'     => esc($data['name']),// . ' applied for job ' . esc($data['reference']),
                    'data'        => [
                        'message'   => esc($data['message']),
                        'name'      => esc($data['name']),
                       // 'reference' => esc($data['reference'])
                    ],
                    'attachments' => $attachments
                ]);
            } catch (Exception $error) {
                // we only display a general error message, for debugging use `$error->getMessage()`
                // Switching out the $alerts section below to test the debug option
                // $alerts[] = "The email could not be sent";
                if(option('debug')):
                    $alerts['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
                else:
                    $alerts['error'] = 'The form could not be sent!';
                endif;
            }

             // no exception occurred, let's send a return email
             if (empty($alerts) === true) { 
                try {
                    $kirby->email([
                      'from' => 'johnrose@johnrose-glass.com',
                      'replyTo' => 'johnrose@johnrose-glass.com',
                      'to' => $data['email'],
                      // 'cc' => 'anotherone@gmail.com',
                      // 'bcc' => 'secret@gmail.com',
                      'subject' => ' Message from ' . esc($data['name']),
                      //'body'=> 'It\'s great to have you with us',
                      'template' => 'confirmation',
                      'data' => [
                        'name' => esc($data['name']),
                      ]
                    ]);
                  } catch (Exception $error) {
                    echo $error;
                  }
                  // errors will be thrown as Exceptions. If you want to notice/output
                  // errors, always use try-catch                
             }

            // no exception occurred, let's send a success message
            if (empty($alerts) === true) {
                // store reference and name in the session for use on the success page
                $kirby->session()->set([
                   // 'reference' => esc($data['reference']),
                    'name'      => esc($data['name'])
                ]);
                // redirect to the success page
                go('success');
            }
        }
    }

    // return data to template
    return [
        'alerts' => $alerts ?? null,
        'data'   => $data   ?? false,
    ];
};