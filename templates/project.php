<?php
/* add notes here */
?>
<?php snippet('header') ?>

<main class="page-margin">
  <article>
    <?php snippet('intro-project') ?>
    <?php snippet('layouts', ['field' => $page->layout()])  ?>

    <?php foreach ($page->projectlayout()->toLayouts() as $layoutTwo): ?>
    <section class="grid" id="<?= $layoutTwo->id() ?>">
      <?php foreach ($layoutTwo->columns() as $column): ?>
      <div class="column" style="--columns:<?= $column->span() ?>">
        <!-- <div class="blocks"> -->
        <?= $column->blocks() ?>
        <!-- </div> -->
      </div>
      <?php endforeach ?>
    </section>
    <?php endforeach ?>

    <div><?= $page->text()->kirbytext() ?></div>

  </article>


</main>

<?php snippet('footer') ?>
