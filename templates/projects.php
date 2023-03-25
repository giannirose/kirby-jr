<?php snippet('header') ?>

<main class="page-margin">
  <!-- Provide a general introduction to whatever follows -->
  <h1><?= $page->title() ?></h1>
  <?php if ($page->intro()->isNotEmpty()): ?>
  <?= $page->intro()->kt() ?>
  <?php endif ?>



  <ul class="projects">
    <!-- List all the children projects one after the other on the same page -->
    <?php foreach ($page->children() as $project): ?>
    <!-- Each individual project will appear as a list item -->
    <!-- list tag previously had class project-list which interfered with rendering -->
    <li>
      <!-- Heading for each project -->
      <header class="center projects">
        <?php if ($project->headline()->or($project->title())->isNotEmpty()): ?>
        <h2 class="headline"><?= $project->headline()->or($project->title()) ?></h2>
        <?php endif ?>
        <?php if ($project->subheadline()->isNotEmpty()): ?>
        <h3 class="subheadline"><?= $project->subheadline() ?></h3>
        <?php endif ?>
        <?php if ($project->additionalInfo()->isNotEmpty()): ?>
        <div class="additional-info"><?= $project->additionalInfo()->kirbytext() ?></div>
        <?php endif ?>
      </header>


      <!-- Insert a cover image with caption, citation and additional explanatory text -->
      <?php if ($project->cover()->toFile()): ?>
      <figure class="cover center <?= $project->cover()->toFile()->imgclass() ?>">
        <?= $project->cover()->toFile() ?>
        <?php if ($project->cover()->caption()->isNotEmpty()): ?>

        <figcaption>
          <?= $project->cover()->toFile()->caption() ?>
        </figcaption>
        <?php endif ?>
        <cite><?= $project->cover()->toFile()->citation() ?></cite>

      </figure>
      <!-- Add some explanatory text below the figure -->
      <?php if ($project->cover()->toFile()->coverintro()->isNotEmpty()): ?>
      <div class="coverintro">
        <?= $project->cover()->toFile()->coverintro()->kirbytext() ?>
      </div>
      <?php endif ?>
      <?php endif ?>



      <?php foreach ($project->layout()->children()->toLayouts() as $layout): ?>
      <section class="grid" id="<?= $layout->id() ?>">
        <?php foreach ($layout->columns() as $column): ?>
        <div class="column" style="--span:<?= $column->span() ?>; --columns:<?= $column->span() ?>">
          <!-- <div class="blocks"> -->
          <?= $column->blocks() ?>
          <!-- </div> -->
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
