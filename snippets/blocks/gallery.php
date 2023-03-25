<?php
/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$ratio   = $block->ratio()->or('auto');

?>
<figure class="noborder" <?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>>
  <!-- change ul to div to permit subgrid on images and captions -->
  <div class="grid-gallery">
    <?php foreach ($block->images()->toFiles() as $image): ?>
    <!-- delete list to permit subgrid on figure element -->
    <!-- <li class=" grid-list <?= $block->listclass() ?>" style="grid-column: span <?= $image->spanwidth() ?>;" > -->
    <figure class=" grid-figure <?= $image->figclass() ?>" style="grid-column: span <?= $image->spanwidth() ?>;">
      <a href="<?= $image->url() ?>">
        <img class="<?= $image->imgclass() ?>" src="<?= $image->resize()->url() ?>" alt="<?= $image->alt() ?>"
          width="<?= $image->width() ?>" height="<?= $image->height() ?>" loading="lazy">
      </a>

      <figcaption>
        <?= $image->caption() ?>
      </figcaption>
      <cite>
        <?= $image->citation() ?>
      </cite>
    </figure>
    <!-- </li> -->
    <?php endforeach ?>
  </div>
  <?php if ($caption->isNotEmpty()): ?>
  <figcaption>
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
