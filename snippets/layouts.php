<?php foreach ($field->toLayouts() as $layout): ?>
  <section class="margin-xl grid" id="<?= $layout->id() ?>" style="--gutter: 2.5rem">
    <?php foreach ($layout->columns() as $column): ?>
      <div class="column" style="--columns:<?= $column->span() ?>">
        <?= $column->blocks() ?>
      </div>
    <?php endforeach ?>
  </section>
<?php endforeach ?>
