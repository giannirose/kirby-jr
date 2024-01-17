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
  <?= css('@auto') ?>
</head>
<!-- snippet header-home has an h1 tag on the page title -->

<body class="<?= $page->navclass() ?>">
  <header class="header-main">

    <div class="header-top">
    </div>
    <div class="header-spacer"></div>

    <div class="header-text">

      <h1 class="page-title">

        <?= $site->title() ?>
      </h1>
      <p class="page-subtitle gradient-text">
        <?= $site->strapline() ?>
      </p>
    </div>
    <div class="header-bottom">
    </div>
    <!-- the main navigation is set by dates or numbers underscore on individual content files -->
    <nav class="header-nav" id="menu">
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
    <div class="header-logo-box">
      <img class="header-logo" src="<?= $site->image()->url() ?>" alt="layered orange fused glass disc with bubbles">
    </div>

  </header>