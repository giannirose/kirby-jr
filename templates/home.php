<?php snippet('header-home') ?>

<main class="page-margin">
  <?php snippet('contact-form-alert') ?>
  <?= $page->intro()->kt() ?>
  <ul class="projects">
    <?php foreach ($page->children() as $project): ?>
    <li>

      <?php if ($project->headline()->or($project->title())->isNotEmpty()): ?>
      <h2 class="project-title"><?= $project->headline()->or($project->title()->html()) ?></h2>
      <?php endif ?>
      <!-- <figure class="project-image figure">
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
    <hr> -->
      <?php foreach ($project->layout()->children()->toLayouts() as $layout): ?>
      <section class=" grid" id="<?= $layout->id() ?>">
        <?php foreach ($layout->columns() as $column): ?>
        <div class="column" style="--span:<?= $column->span() ?>; --columns:<?= $column->span() ?>">
          <div class="blocks">
            <?= $column->blocks() ?>
          </div>
        </div>
        <?php endforeach ?>
      </section>
      <?php endforeach ?>
      <hr>
    </li>
    <?php endforeach ?>


  </ul>
</main>

<?php snippet('footer') ?>
