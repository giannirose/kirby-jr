<?php snippet('header') ?>

<section class="content blog">

  <h1><?= $page->title() ?></h1>
  <?= $page->text()->kirbytext() ?>

  <?php foreach($page->children()->listed()->flip() as $article): ?>


  <article>
    <?php if ($cover = $article->cover()->toFile()): ?>
    <figure class="img" style="--w: 16; --h:9">

      <img src="<?= $cover->crop(320, 180) ?>">

    </figure>
    <?php endif ?>


    <h1><?= $article->title()->html() ?></h1>
    <p><?= $article->text()->excerpt(300) ?></p>
    <p><a href="<?= $article->url() ?>">Read the article…</a></p>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>