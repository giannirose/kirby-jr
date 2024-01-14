<?php snippet('header') ?>

<?php foreach ($page->layout()->toLayouts() as $layout): ?>
  <section class="blog margin-xl grid" id="<?= $layout->id() ?>" style="--gutter: 2.5rem">
    <?php foreach ($layout->columns() as $column): ?>
      <div class="column" style="--columns:<?= $column->span() ?>">
        <?= $column->blocks() ?>
      </div>
    <?php endforeach ?>
  </section>
<?php endforeach ?>

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

<?php snippet('footer') ?>