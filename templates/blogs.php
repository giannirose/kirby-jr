<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This template lists all the subpages of the `notes` page with
  their title date sorted by date and links to each subpage.

  This template receives additional variables like $tag and $notes
  from the `notes.php` controller in `/site/controllers/notes.php`

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>
<?php snippet('header') ?>

<div class="h1">
  <header>

    <?php if (empty($tag) === false): ?>
    <header class="h1">
      <h1>
        <small>Featured:</small> <?= html($tag) ?>
        <a href="<?= $page->url() ?>" aria-label="All Notes"></a>
      </h1>
    </header>
    <?php else: ?>
    <?php snippet('intro') ?>
    <?php endif ?>

    <ul class="blogs-grid ">
      <?php foreach ($blogs as $blog): ?>
      <li class="column list-grid">
        <?php snippet('blog', ['blog' => $blog]) ?>

      </li>
      <?php endforeach ?>
    </ul>

    <?php snippet('pagination', ['pagination' => $blogs->pagination()]) ?>
    <?php snippet('footer') ?>
