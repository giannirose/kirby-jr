<?php
use Kirby\Cms\Html;

/** @var \Kirby\Cms\Block $block */
$alt = $block->image()->toFile()->alt();
$crop = $block->crop()->isTrue();
$link = $block->link();
$ratio = $block->ratio()->or('auto');
$src = null;
$width = $block->image()->toFile()->width();
$height = $block->image()->toFile()->height();
$caption = $block->image()->toFile()->caption();
$imgclass = $block->image()->toFile()->imgclass();
$citation = $block->image()->toFile()->citation();
$figclass = $block->image()->toFile()->figclass();
$figurehead = $block->image()->toFile()->figurehead();
$imginlinestyle = $block->image()->toFile()->imginlinestyle();

if ($block->location() == 'web') {
  $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
  $alt = $alt ?? $image->alt();
  $src = $image->url();
}

?>
<?php if ($src): ?>
  <?php if ($figurehead->isNotEmpty()): ?>
    <p class="h3 imagehead">
      <?= $figurehead ?>
    </p>
  <?php endif ?>
  <figure <?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>
    class="imagephp center <?= $figclass ?>" style="<?= $block->inlinefigurestyle()->html() ?>">

    <?php if ($link->isNotEmpty()): ?>
      <a href="<?= $link->toUrl() ?>">

      <?php else: ?>
        <a href="<?= $image->url() ?>">
          <img class="imageinblocks <?= $imgclass ?>" src="<?= $src ?>" alt="<?= $alt->esc() ?>" width="<?= $width ?>"
            height="<?= $height ?>" data-attribute="" style="<?= $imginlinestyle ?>" loading="lazy">
        </a>
      <?php endif ?>

      <?php if ($block->image()->toFile()->caption()->isNotEmpty()): ?>
        <figcaption>
          <?= $caption ?>
        </figcaption>
      <?php endif ?>
      <?php if ($block->image()->toFile()->citation()->isNotEmpty()): ?>
        <cite>
          <?= $citation ?>
        </cite>
      <?php endif ?>
  </figure>
<?php endif ?>
