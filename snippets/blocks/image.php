<?php

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();

$crop    = $block->crop()->isTrue();
$link    = $block->link();
$ratio   = $block->ratio()->or('auto');
$src     = null;
$width   = $block->width();
$height  = $block->height();
$citation = $block->citation();
$figclass = $block->figclass();

if ($block->location() == 'web') {
    $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt ?? $image->alt();
    $src = $image->url();
}

?>
<?php if ($src): ?>
<figure <?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>
  class="imagephp center <?= $block->figclass() ?>" style="<?= $block->inlinefigurestyle()->html() ?>">

  <?php if ($link->isNotEmpty()): ?>
  <a href="<?= $link->toUrl() ?>">

    <?php else: ?>
    <a href="<?= $image->url() ?>">
      <img class="imageinblocks <?= $block->imgclass() ?>" src="<?= $src ?>" alt="<?= $alt->esc() ?>"
        width="<?= $block->width() ?>" height="<?= $block->height() ?>" data-attribute=""
        style="<?= $block->imginlinestyle()->html() ?>" loading="lazy">
    </a>
    <?php endif ?>

    <?php if ($block->caption()->isNotEmpty()): ?>
    <figcaption>
      <?= $block->caption() ?>
    </figcaption>
    <cite> <?= $block->citation() ?></cite>
    <?php endif ?>
</figure>
<?php endif ?>
