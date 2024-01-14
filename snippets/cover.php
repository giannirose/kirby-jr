<?php

if($cover = $page->cover()->toFile()): ?>
<figure class=" site-snippets <?= $cover->figclass() ?>">
  <img class=" johnclass" src="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>" loading="lazy"
    width="<?= $cover->width() ?>" height="<?= $cover->height() ?>" />

  <?php if ($cover->caption()->isNotEmpty()): ?>
  <figcaption>
    <?= $cover->caption() ?>
  </figcaption>
  <?php endif ?>
  <?php if ($cover->citation()->isNotEmpty()): ?>
  <cite><?= $cover->citation() ?></cite>

  <?php endif ?>

</figure>
<h3><?php $cover->cover()->toFile()->coverintro() ?></h3>
<?php endif ?>