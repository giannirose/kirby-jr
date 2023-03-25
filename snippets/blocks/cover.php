<?php

if($cover = $page->cover()->toFile()): ?>
<figure class=" is-this-in-blocks <?= $cover->figclass() ?>">

  <img class=" snippets-in-blocks  <?= $cover->imgclass() ?>" src="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>"
    loading="lazy" style="width:<?= $cover->imwidth()?>;" width="<?= $cover->width() ?>"
    height="<?= $cover->height() ?>">

  <?php if ($cover->caption()->isNotEmpty()): ?>
  <figcaption>
    <?= $cover->caption() ?>
  </figcaption>
  <?php endif ?>
  <?php if ($cover->citation()->isNotEmpty()): ?>
  <cite><?= $cover->citation() ?></cite>
  <?php endif ?>
</figure>
<?= $cover->coverintro() ?>
<p>I am in snippets blocks cover.php</p>
<?php endif ?>
