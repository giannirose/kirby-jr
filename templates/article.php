<?php snippet('header-blog') ?>


<section class="content article">
  <article>
    <?php snippet('intro') ?>
    <?= $page->intro()->kirbytext() ?>
    <?= $page->text()->kirbytext() ?>

    <p><a href="<?= url('blog') ?>">Back…</a></p>

  </article>
</section>

<?php snippet('layouts', ['field' => $page->layout()])  ?>

<?php snippet('footer') ?>
