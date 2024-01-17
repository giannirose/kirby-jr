<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $site->description() ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $page->title() ?> |
    <?= $site->title() ?>
  </title>
  <?= css('assets/css/starter.css') ?>
  <?= css('assets/css/index.css') ?>
  <!-- &lt;?= css('assets/css/article.css') ?>
  &lt;?= css('assets/css/articles.css') ?>
  &lt;?= css('assets/css/templates/blogs.css') ?>
  &lt;?= css('assets/css/contact_simple.css') ?>
  &lt;?= css('assets/css/contact.css') ?>
  &lt;?= css('assets/css/home.css') ?>
  &lt;?= css('assets/css/project.css') ?>
  &lt;?= css('assets/css/projects.css') ?> -->
  <!-- &lt;?= css('assets/css/templates/contact.css') ?> -->
  <?= css('@auto') ?>
</head>
<!-- The standard header.php has title in an h2 class so subject of page can have an h1 -->

<body class="<?= $page->navclass() ?>">
  <header class="header-main">
    < <div class="header-top">
      </div>
      <div class="header-spacer"></div>
      <div class="header-logo-box">
        <img class="header-logo" src="<?= $site->image()->url() ?>" alt="layered orange fused glass disc with bubbles">
      </div>
      <div class="header-text">
        <h2 class="page-title">
          <?= $site->title() ?>
        </h2>
        <p class="page-subtitle gradient-text">
          <?= $site->strapline() ?>
        </p>
      </div>
      <div class="header-bottom">
      </div>
      <!-- the main navigation is set by dates or numbers underscore on individual content files -->
      <nav class="header-nav">
        <ul class="nav-main nav-colors">
          <?php foreach ($site->children()->listed() as $item): ?>
            <li class="<?= $item->navclass() ?>">
              <a href="<?= $item->url() ?>">
                <?= $item->title() ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      </nav>


  </header>