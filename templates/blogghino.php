<section class="blog margin-xl grid" id="<?= $bloguette->id() ?>" style="--gutter: 2.5rem">
  <?php foreach ($bloguette->columns() as $column): ?>
    <div class="column" style="--columns:<?= $column->span() ?>">
      <?= $column->blocks() ?>
    </div>
  <?php endforeach ?>
</section>