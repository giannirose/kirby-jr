<?php

return function ($kirby, $page) {

  $alerts  = [];
  $success = '';

  if ($kirby->request()->is('post') === true && get('submit')) {

    // check the honeypot
    if (empty(get('website')) === false) {
      go($page->url());
      exit();
    }

    $uploads = $kirby->request()->files()->get('file');

    // we only want 3 files
    if (count($uploads) > 3) {
      $alerts['exceedMax'] = 'You may only upload 3 files.';
      return compact('alerts', 'success');
    }

    // authenticate as almighty
    $kirby->impersonate('kirby');

    foreach ($uploads as $upload) {

      // check for duplicate
      $files      = page('storage')->files();
      $duplicates = $files->filter(function ($file) use ($upload) {
        // get original safename without prefix
        $pos              = strpos($file->filename(), '_');
        $originalSafename = substr($file->filename(), $pos + 1);

        return $originalSafename === F::safeName($upload['name']) &&
                $file->mime() === $upload['type'] &&
                $file->size() === $upload['size'];
      });

      if ($duplicates->count() > 0) {
        $alerts[$upload['name']] = "The file already exists";
        continue;
      }

      try {
        $name = crc32($upload['name'].microtime()). '_' . $upload['name'];
        $file = page('storage')->createFile([
          'source'   => $upload['tmp_name'],
          'filename' => $name,
          'template' => 'upload',
          'content' => [
              'date' => date('Y-m-d h:m')
          ]
        ]);
        $success = 'Your file upload was successful';
      } catch (Exception $e) {
        $alerts[$upload['name']] = $e->getMessage();
      }
    }
  }

  return compact('alerts', 'success');
};
