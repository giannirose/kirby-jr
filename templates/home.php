<?php snippet('header-home') ?>

<main>
  <?= $page->intro()->kt() ?>
  <?= $site->ContactText() ?>
  <ul class="projects">
    <?php foreach ($page->children() as $project): ?>
    <li class="project-list">
      <h3 class="project-title"><?= $project->title() ?></h3>
      <figure class="project-image figure">
        <a href="<?= $project->image()->link() ?>">
          <img src="<?= $project->image()->url() ?>" alt="<?= $project->alt() ?>" width="<?= $project->width() ?>"
            height="<?= $project->height() ?>">
        </a>

        <figcaption class="figure-caption">
          <?= $project->caption() ?>
          <cite>
            <?= $project->citation() ?>
          </cite>
        </figcaption>
      </figure>
      <div class=" project-text"><?= markdown($project->text()) ?></div>
    </li>
    <hr>
    <?php endforeach ?>
  </ul>
</main>

<?php snippet('footer') ?>
