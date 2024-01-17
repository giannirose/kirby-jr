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

<header class="center">

  <h1><?= $page->headline()->or($page->title())->html() ?></h1>
  <?php if ($page->subheadline()->isNotEmpty()): ?>
  <h2 class="subheadline"><?= $page->subheadline()->html() ?></h2>
  <?php endif ?>
  <?php if ($page->additionalInfo()->isNotEmpty()): ?>
  <div class="additional-info"><?= $page->additionalInfo()->kirbytext() ?></div>
  <?php endif ?>
</header>