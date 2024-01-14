<?php snippet('header') ?>

<article class="blog">
  <h1 class="h1">
    <?= $page->title()->html() ?>
  </h1>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>

  <?php foreach ($page->children()->listed() as $blogghino): ?>
    <section>
      <div class="introtext">
        <?= $blogghino->introtext()->kirbytext() ?>
      </div>
      <div class="twocolumn">
        <div class=" <?= $blogghino->choosecolumn() ?> ">
          <?= $blogghino->text()->kirbytext() ?>
        </div>

        <?php if ($image = $blogghino->image()): ?>

          <div class="">
            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
          </div>
        <?php endif ?>

      </div>
      <div class="outrotext">
        <?= $blogghino->outrotext()->kirbytext() ?>
      </div>
    </section>
  <?php endforeach ?>
</article>

<?php snippet('footer') ?>