<?php
/* add notes here */
?>
<?php snippet('header') ?>

<main class="page-margin">
  <article>
    <?php snippet('intro-project') ?>

    <!-- Add cover image and text if exists -->
    <!-- Insert a cover image with caption, citation and additional explanatory text -->
    <?php if ($page->cover()->toFile()->isNotEmpty()): ?>
    <figure class="cover center <?= $page->cover()->toFile()->imgclass() ?>">
      <?= $page->cover()->toFile() ?>
      <?php if ($page->cover()->caption()->isNotEmpty()): ?>

      <figcaption>
        <?= $page->cover()->toFile()->caption() ?>
      </figcaption>
      <?php endif ?>
      <cite><?= $page->cover()->toFile()->citation() ?></cite>

    </figure>
    <!-- Add some explanatory text below the figure -->
    <?php if ($page->cover()->toFile()->coverintro()->isNotEmpty()): ?>
    <div class="coverintro">
      <?= $page->cover()->toFile()->coverintro()->kirbytext() ?>
    </div>
    <?php endif ?>
    <?php endif ?>

    <?php if ($page->introText()->isNotEmpty()): ?>
    <div class="intro-text">
      <?= $page->introText()->kirbytext() ?>
    </div>
    <?php endif ?>


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

    <!-- A default text block not currently used- commented out on the .yml page as well -->
    <!-- <div><?= $page->text()->kirbytext() ?></div> -->

  </article>


</main>

<?php snippet('footer') ?>
