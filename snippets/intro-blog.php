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
    <h1>
      <?= $page->headline()->or($page->title())->html() ?>
    </h1>

    <p class="color-grey subheadline">
      <?= $page->subheadline() ?>
    </p>

    <?php if (!empty($tags)): ?>
      <ul class="blog-tags">

        <?php foreach ($tags as $tag): ?>
          <li>
            From Collection: <a href="<?= $page->parent()->url(['params' => ['tag' => $tag]]) ?>"><?= html($tag) ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

  </header>
  <div class="blog-intro">
    <?= $page->intro()->kirbytext() ?>
  </div>

  <p>
    <?php $page->cover()->toFile() ?>
  </p>


  <!-- Add a cover image in a div -->
  <div class="blog-intro-cover">
    <?php if ($page->cover()->isNotEmpty()): ?>
      <figure class=" imintrophp <?= $page->cover()->figclass() ?>">
        <?php if ($page->cover()->link()->isNotEmpty()): ?>

          <a href="<?= $page->cover()->link() ?>">
          <?php else: ?>

            <a href="<?= $page->cover()->url() ?>">
            <?php endif ?>
            <img src="<?= $page->cover()->url() ?>" alt="<?= $page->cover()->alt() ?>"
              class="<?= $page->cover()->imgclass() ?>" loading="lazy" width="<?= $page->cover()->width() ?>"
              height="<?= $page->cover()->height() ?>">

          </a>

          <figcaption>
            <?= $page->cover()->caption() ?>
          </figcaption>

          <cite>
            <?= $page->cover()->citation() ?>
          </cite>

      </figure>

    <?php endif ?>
  </div>
  <!-- End cover image in a div-->

  <div class="coverintro">
    <!-- Add some explanatory text below the figure -->
    <?php if ($page->cover()->coverintro()->isNotEmpty()): ?>

      <?= $page->coverintro()->kirbytext() ?>

    <?php endif ?>
  </div>





</div>
<!--End intro-blog with cover image-->
