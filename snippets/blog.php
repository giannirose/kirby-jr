<?php
/*
Snippet is on blogs.php as a link to the blog itself
*/
?>




<h2 class="blog-excerpt-title"> <a href="<?= $blog->url() ?>"><?= $blog->title()->kirbytext() ?> </a></h2>


<div class="blog-excerpt-figure">
  <a href="<?= $blog->url() ?>">
    <figure class="blog-excerpt-figure img" style="--w: 16; --h:9">
      <?php if ($cover = $blog->cover()): ?>
      <?= $cover->crop(484, 768); ?>
      <?php endif ?>
    </figure>
  </a>
</div>
<div class="blog-excerpt-date">
  <a href="<?= $blog->url() ?>">
    <time class="blog-excerpt-date" datetime="<?= $blog->published('c') ?>"><?= $blog->published() ?></time>
  </a>
</div>
<div class="blog-excerpt-text">
  <?php if ($blog->excerpt_self()->isNotEmpty()): ?>
  <?= $blog->excerpt_self() ?>
  <br>
  <a class="floatright" href="<?= $blog->url() ?>">Read More...</a>
  <?php else : ?>
  <?php if (($excerpt ?? true) !== false): ?>


  <?= $blog->intro()->toBlocks()->excerpt(180) ?>
  <br>
  <a class="floatright" href="<?= $blog->url() ?>">Read More...</a>
  <?php endif ?>
  <?php endif ?>
</div>
