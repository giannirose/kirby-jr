<?php
/*
This snippet was copied from the kirby starter-kit
Snippets are a great way to store code snippets for reuse
or to keep your templates clean.
This intro snippet is reused in multiple templates.
While it does not contain much code, it helps to keep your
code DRY and thus facilitate maintenance when you have
to make changes.
More about snippets:
https://getkirby.com/docs/guide/templates/snippets
*/
?>
<div class="h1">
  <header>
    <!--
    <h1>
      <?= $page->headline()->html()->or($page->title()->html()) ?>
    </h1>
  -->
    <?php if ($page->subheadline()->isNotEmpty()): ?>
      <p class="color-grey subheadline">
        <?= $page->subheadline()->html() ?>
      </p>
    <?php endif ?>

  </header>
  <?= $page->intro()->kirbytext() ?>
  <?php snippet('cover') ?>
</div>