<?php snippet('header-blog') ?>
<div class="container-wrapper">
  <div class="wrapper">
    <!-- List blogs by tags -->
    <aside class="aside">
      <h2 class="blogroll">Blog topics...</h2>
      <?php snippet('tags-list-anywhere') ?>
    </aside>
    <main class="main">
      <article class="blog note">
        <!-- The intro to the blog includes a centered image-->
        <?php snippet('intro-blog') ?>
        <!-- Render layouts -->

        <!-- Use the layouts snippet -->
        <?php snippet('layouts', ['field' => $page->layout()]) ?>
        <!-- &lt;?php foreach ($page->children()->layout()->toLayouts() as $layout): ?>
    <section class="grid" id="&lt;?= $layout->id() ?>">
      &lt; -?php foreach ($layout->columns() as $column): ?>
        <div class="column" style="--span:&lt;?= $column->span() ?>">
          <div class="blocks">
            &lt;?= $column->blocks() ?>
          </div>
        </div>
      &lt;?php endforeach ?>
    </section>
  &lt;?php endforeach ?> -->

        <?php foreach ($page->children()->listed() as $bloguette): ?>
          <?php foreach ($bloguette->layout()->toLayouts() as $layout): ?>
            <section class="grid" id="<?= $layout->id() ?>">
              <?php foreach ($layout->columns() as $column): ?>
                <div class="column" style="--columns:<?= $column->span() ?>">

                  <div class="blocks">
                    <?= $column->blocks() ?>
                  </div>
                </div>
              <?php endforeach ?>
            </section>
          <?php endforeach ?>
        <?php endforeach ?>

      </article>
      <!-- from getkirby cookbook building a blog -->
      <?php $filteredPages = $page->children()->filterBy('tags', 'design', ','); ?>

      <!-- from getkirby cookbook building a blog -->
      <?php $articles = $page->children()
        ->listed()
        ->flip()
        ->paginate(10);
      ?>

      <?php $articles = $page->children()
        ->listed()
        ->filterBy('tags', 'design', ',')
        ->flip()
        ->paginate(10);
      ?>

      <!-- from getkirby cookbook building a blog -->
      <?php $articles = $page->children()
        ->listed()
        ->flip()
        ->paginate(10);
      ?>

      <!-- fetch the basic set of articles -->
      <?php $articles = $page->children()->listed()->flip();

      // add the tag filter
      if ($tag = param('tag')) {
        $articles = $articles->filterBy('tags', $tag, ',');
      }

      ?>

      <?php

      // fetch all tags
      $tags = $page->children()->listed()->pluck('tags', ',', true);

      ?>
      <ul class="tags">
        <?php foreach ($tags as $tag): ?>
          <li>
            <a href="<?= url('blogs', ['params' => ['tag' => $tag]]) ?>">
              <?= html($tag) ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>

      <!-- apply pagination -->
      <?php $articles = $articles->paginate(10);
      ?>
    </main>
    <!-- Show tags for blogs -->
    <footer class="note-footer">
      <?php if (!empty($tags)): ?>
        <ul class="note-tags">
          <?php foreach ($tags as $tag): ?>
            <li>
              Category: <a href="<?= $page->parent()->url(['params' => ['tag' => $tag]]) ?>">
                <?= html($tag) ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
      <br>

      <time class="note-date" datetime="<?= $page->date('c') ?>">Published on
        <?= $page->date() ?>
      </time>
      &nbsp; <br>
      &nbsp; <br>
      <p>
        <?php snippet('prevnext_blog') ?>
      </p>
      &nbsp; <br>
      &nbsp; <br>



      <!-- apply pagination -->
      <?php $articles = $articles->paginate(10);
      ?>


      <!-- from getkirby cookbook building a blog -->
      <?php $articles = $page->children()
        ->listed()
        ->flip()
        ->paginate(10);
      ?>

      <!-- fetch the basic set of articles -->
      <?php $articles = $page->children()->listed()->flip();

      // add the tag filter
      if ($tag = param('tag')) {
        $articles = $articles->filterBy('tags', $tag, ',');
      }

      ?>

      <?php

      // fetch all tags
      $tags = $page->children()->listed()->pluck('tags', ',', true);

      ?>

      <ul class="tags">
        <?php foreach ($tags as $tag): ?>
          <li>
            <a href="<?= url('blogs', ['params' => ['tag' => $tag]]) ?>">
              <?= html($tag) ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>

      <!-- fetch the basic set of articles -->
      <?php
      $page = page('blogs');
      ?>
      <!-- from getkirby cookbook building a blog -->
      <?php $articles = $page->children()
        ->listed()
        ->flip()
        ->paginate(10);
      ?>

    </footer>
    <!-- Close div .wrapper -->
  </div>

  <!-- Close div  .container-wrapper -->
</div>
</body>

</html>
