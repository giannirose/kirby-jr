<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $site->description() ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $page->title() ?> | <?= $site->title() ?>
  </title>
  <?= css('assets/css/starter.css') ?>
  <?= css('assets/css/index.css') ?>
  <?= css('@auto') ?>
</head>

<body>
  <header class="header-main">

    <div class="header-top">
    </div>
    <div class="header-spacer"></div>
    <div class="header-logo-box">
      <img class="header-logo" src="<?= $site->image()->url() ?>" alt="layered orange fused glass disc with bubbles">
    </div>
    <div class="header-text">
      <h2 class="page-title">
        <?= $site->titleBlog() ?>
      </h2>
      <p class="page-subtitle gradient-text">
        <?= $site->straplineBlog() ?>
      </p>
    </div>
    <div class="header-bottom">
    </div>
    <nav class="header-nav">
      <ul class="nav-main">
        <!-- Limit the blog links to the stained glass home page -->
        <li>
          <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
        </li>
        <!-- The following would be used for a listing of all pages -->
        <!--       <?php foreach ($site->children()->listed() as $item): ?>
        <li>
          <a href="<?= $item->url() ?>"><?= $item->title()
           ?></a>
        </li>
        <?php endforeach ?>
        <li><a href="<?= $item->url() ?>"><?= $site->children()->nth(1)->title(); ?>
          </a></li>
 -->

      </ul>
    </nav>


  </header>
