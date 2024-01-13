<?php
/**
 * Controllers allow you to separate the logic of your templates from your markup.
 * This is especially useful for complex logic, but also in general to keep your templates clean.
 *
 * In this example, we handle tag filtering and paginating notes in the controller,
 * before we pass the currently active tag and the notes to the template.
 *
 * More about controllers:
 * https://getkirby.com/docs/guide/templates/controllers
 */
return function ($page) {

    $tag = urldecode(param('tag') ?? '');

    $blogs = collection('blogs');

    if (empty($tag) === false) {
        $blogs = $blogs->filterBy('tags', $tag, ',');
    }

    return [
        'tag' => $tag,
        'blogs' => $blogs->paginate(6)
    ];

};