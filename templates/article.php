<?php snippet('header-blog') ?>

<article class="content article">

  <section>
    <?php snippet('intro') ?>
    <!-- <?= $page->cover()->toFile() ?> -->
    <!-- <?= $page->intro()->kirbytext() ?>
    <?= $page->text()->kirbytext() ?> -->
  </section>

  <section class="content article">
    <?php snippet('layouts', ['field' => $page->layout()])  ?>
  </section>
</article>
<?php snippet('footer') ?>