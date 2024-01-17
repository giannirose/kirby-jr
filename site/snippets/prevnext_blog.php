<?php if ($page->hasPrevListed()): ?>
<p class="blog-page-listing"><a href="<?= $page->prevListed()->url() ?>">
    <–Previous Blog</a>
      <?php endif ?>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <?php if ($page->hasNextListed()): ?>
      <a href="<?= $page->nextListed()->url() ?>">Next Blog–></a>
</p>
<?php endif ?>