<div class="h1">
  <header>
    <h1>
      <?= $page->headline()->or($page->title())->html() ?>
    </h1>
    <p class="color-grey subheadline">
      <?= $page->subheadline() ?>
    </p>

    <?php if (!empty($tags)): ?>
      <ul class="blog-tags">
        <?php foreach ($tags as $tag): ?>
          <li>
            From Collection: <a href="<?= $page->parent()->url(['params' => ['tag' => $tag]]) ?>">
              <?= html($tag) ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

  </header>

  <div class="blog-intro">
    <?= $page->intro()->kirbytext() ?>
  </div>

  <!-- Add a cover image in a div -->
  <div class="blog-intro-cover" style="display: <?= $page->stylediv() ?>;">

    <!-- Local site had this blanked out and working -->
    <!-- &lt;?php if ($page->cover()->toFile()->url()->isNotEmpty()): ?> -->
    <!-- End test comment-out -->
    <p class="h3">
      <?= $page->cover()->figurehead() ?>
    </p>

    <figure class="imintroblogphp <?= $page->cover()->figclass() ?> ">

      <?php if ($page->cover()->link()->isNotEmpty()): ?>


        <a href=" <?= $page->cover()->link() ?>">
        <?php else: ?>
          <a href="<?= $page->cover()->url() ?>">
          <?php endif ?>
          <img src="<?= $page->cover()->url() ?>" alt="<?= $page->cover()->alt() ?>"
            class="<?= $page->cover()->imgclass() ?> figure" loading="lazy" width="<?= $page->cover()->width() ?>"
            height="<?= $page->cover()->height() ?>" />
        </a>

        <figcaption>
          <?= $page->cover()->caption() ?>
        </figcaption>

        <cite>
          <?= $page->cover()->citation() ?>
        </cite>
    </figure>

    <!-- Commented out when local site worked -->
    <!-- &lt;?php endif ?> -->
    <!-- End comment out section -->

    <div class="coverintro">
      <!-- Add some explanatory text below the figure -->
      <?php if ($page->coverintro()->isNotEmpty()): ?>

        <?= $page->coverintro()->kirbytext() ?>

      <?php endif ?>
    </div>
  </div>

  <!-- End cover image in a div-->
  <!-- End div class="h1" -->
</div>