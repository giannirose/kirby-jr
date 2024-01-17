<!-- individual blog posts listed on the blogs page -->

<div class="blog-excerpt-title">
  <h2>
    <a href="<?= $blog->url() ?>">
      <?= $blog->title() ?>
    </a>
  </h2>
</div>
<!-- this was commented out -->
<div class="blog-excerpt-figure">
  <a href="<?= $blog->url() ?>">
    <figure class="blog-excerpt-figure img" style="--w: 16; --h:9">
      <?php if ($cover = $blog->cover()): ?>
        <?= $cover ?>
      <?php endif ?>
    </figure>
  </a>
</div>
<!-- End comment out section -->
<!-- Previously commented out -->
<div class="blog-date-and-text">
  <p class="blog-excerpt-date">
    <a href="<?= $blog->url() ?>">
      <time class="blog-excerpt-date" datetime="<?= $blog->published('c') ?>">
        <?= $blog->published() ?>
      </time>
    </a>
  </p>

  <?php if ($blog->excerpt_self()->isNotEmpty()): ?>
    <p>
      <?= $blog->excerpt_self() ?>
    </p>

  <?php else: ?>
    <?php if (($excerpt ?? true) !== false): ?>
      <p>
        <?= $blog->intro()->toBlocks()->excerpt(180) ?>

      </p>

    <?php endif ?>
  <?php endif ?>
</div>
<!-- Move "Read on" to look better in subgrid -->
<div class="instructions">
  <p class="alignleft">
    <a class="blog-read-link" href="<?= $blog->url() ?>">Read on...</a>
  </p>
</div>
