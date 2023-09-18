<?php snippet('header') ?>

<article class="blog note">
  <!-- The intro to the blog includes a centered image-->
  <?php snippet('intro-blog') ?>
  <!-- Render layouts -->
  <?php snippet('layouts', ['field' => $page->layout()]) ?>
</article>
<!-- Show tags for blogs -->
<footer class="note-footer">
  <?php if (!empty($tags)): ?>
    <ul class="note-tags">
      <?php foreach ($tags as $tag): ?>
        <li>
          Category: <a href="<?= $page->parent()->url(['params' => ['tag' => $tag]]) ?>"><?= html($tag) ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>
  <br>

  <time class="note-date" datetime="<?= $page->date('c') ?>">Published on <?= $page->date() ?></time>
  &nbsp; <br>
  &nbsp; <br>
  <p>
    <?php snippet('blog_nav_listed_prev_next') ?>
  </p>
  &nbsp; <br>
  &nbsp; <br>
</footer>
<!-- Close tags here rather than add footer with closing tags -->
</body>

</html>
