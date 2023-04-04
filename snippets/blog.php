<?php
/*
Snippet is on blogs.php as a link to the blog itself
*/
?>
<article class="blog-excerpt">
  <a href="<?= $blog->url() ?>">
    <header>
      <h2 class="blog-excerpt-title"><?= $blog->title()->kirbytext() ?></h2>
      <figure class="blog-excerpt-figure img" style="--w: 16; --h:9">
        <?php if ($cover = $blog->cover()): ?>
        <?= $cover->crop(484, 768); ?>
        <?php endif ?>
      </figure>


      <div class="blog-excerpt-date"><time class="note-excerpt-date"
          datetime="<?= $blog->published('c') ?>"><?= $blog->published() ?></time></div>
    </header>
  </a>
  <?php if (($excerpt ?? true) !== false): ?>
  <div class="blog-excerpt-text">
    <?= $blog->intro()->toBlocks()->excerpt(280) ?>
    <br>
    <a class="floatright" href="<?= $blog->url() ?>">Read More...</a>
  </div>
  <?php endif ?>

</article>
