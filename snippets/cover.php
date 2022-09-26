<?php

if($image = $page->toFile()): ?>
<figure class="<?= $image->figclass() ?> <?= $image->image-position() ?> testclass">
  <a href="<?= $image->link() ?>">
    <img class="<?= $image->imgclass() ?> covertestclass" src=" <?= $image->url() ?>" alt="<?= $image->alt() ?>"
      style="width:<?= $image->imwidth() ?>">
  </a>
  <?php if ($image->caption()->isNotEmpty()): ?>
  <figcaption>
    <p><?= $image->caption() ?></p>
  </figcaption>
  <?php endif ?>
  <?php if ($image->citation()->isNotEmpty()): ?>
  <cite><?= $image->citation() ?></cite>
  <?php endif ?>
</figure>
<?php endif ?>
