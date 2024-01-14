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
$citation = $block->image()->toFile()->citation();
$figclass = $block->figclass();
$figurehead = $block->image()->toFile()->figurehead();

if ($block->location() == 'web') {
  $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
  $alt = $alt ?? $image->alt();
  $src = $image->url();
}

?>
<?php if ($src): ?>
  <p class="h3"></p>
  <?= $figurehead ?>
  </p>
  <p>I'm in image.php snippet</p>

  <figure <?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>
    class="imagephp center <?= $block->figclass() ?>" style="<?= $block->inlinefigurestyle()->html() ?>">

    <?php if ($link->isNotEmpty()): ?>
      <a href="<?= $link->toUrl() ?>">

      <?php else: ?>
        <a href="<?= $image->url() ?>">
          <img class="imageinblocks <?= $block->imgclass() ?>" src="<?= $src ?>" alt="<?= $alt->esc() ?>"
            width="<?= $width ?>" height="<?= $height ?>" data-attribute="" style="<?= $block->imginlinestyle()->html() ?>"
            loading="lazy">
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