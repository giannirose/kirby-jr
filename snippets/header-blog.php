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
  <?= css('assets/css/blog.css') ?>
  <?= css('assets/css/blogs.css') ?>
  <?= css('@auto') ?>
  <?= css('assets/css/headerblog.css') ?>

</head>
<!-- header-blog does not have the full navigation -->

<body>
  <header class="header-main">

    <div class="header-top">
    </div>
    <div class="header-spacer"></div>
    <div class="header-logo-box">
      <img class="header-logo" src="<?= $site->image()->url() ?>"
        alt="trees in the mountains and trees in the valley and a comet in stained glass">
    </div>
    <div class="header-text">
      <a href="/blogs">
        <h2 class="page-title">
          <?= $site->titleBlog() ?>
        </h2>
      </a>
      <p class="page-subtitle gradient-text">
        <?= $site->straplineBlog() ?>
      </p>
    </div>
    <div class="header-bottom">
    </div>
    <nav class="header-nav">
      <ul class="nav-main nav-colors">
        <!-- Limit the blog links to the stained glass home page -->
        <li>
          <a href="<?= $site->url() ?>">
            <!-- <?= $site->title() ?> -->
            Stained<br>Glass
          </a>
        </li>
        <li>
          <a href="/blogs">
            Crafty:<br>
            The blog
          </a>
        </li>

        <li><a href="/Contact">
            Contact
          </a></li>


      </ul>

    </nav>


  </header>
