<?php snippet('header-blog') ?>

<section class="content blog">

  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>

  <?php foreach($page->children()->listed()->flip() as $article): ?>

  <article>
    <h1><?= $article->title()->html() ?></h1>
    <p><?= $article->text()->excerpt(300) ?></p>
    <p><a href="<?= $article->url() ?>">Read more…</a></p>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>
