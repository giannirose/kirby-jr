<?php snippet('header-blog') ?>
<div class="container-wrapper">
  <div class="wrapper">
    <!-- List blogs by tags -->
    <aside class="aside">
      <h2 class="blogroll">Blog topics...</h2>
      <?php snippet('tags-list') ?>
    </aside>
    <main class="main">

      <?php if (empty($tag) === false): ?>
        <header class="h1">
          <h1>
            <small>Collection:</small>
            <?= html($tag) ?>
            <a href="<?= $page->url() ?>" aria-label="All Notes"></a>
          </h1>
        </header>
      <?php else: ?>

        <?php snippet('intro-blogs') ?>
      <?php endif ?>
      <!-- container is declared in ul element -->
      <!-- Remove grid-making blogs-grid from ul class, or not -->
      <div class="blogs-cards">
        <ul role="list" class="flexbox-grid card cardlist resize blogs-grid ">
          <?php foreach ($blogs as $blog): ?>
            <li class="column list-grid ">
              <!-- Container query uses .card in added div -->

              <?php snippet('blog', ['blog' => $blog]) ?>

            </li>

          <?php endforeach ?>
        </ul>
      </div>

      <!-- from getkirby cookbook building a blog -->
      <?php $articles = $page->children()
        ->listed()
        ->flip()
        ->paginate(10);
      ?>

      <!-- apply pagination -->
      <?php $articles = $articles->paginate(10);
      ?>
      <?php snippet('pagination', ['pagination' => $blogs->pagination()]) ?>
      <?php snippet('footer-no-closer') ?>
      <!-- Close div .wrapper -->
  </div>

  <!-- Close div  .container-wrapper -->
</div>
</body>

</html>