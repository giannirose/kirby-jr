<?php snippet('header') ?>

<?php if ($success): ?>
  <div class="alert success">
    <p><?= $success ?></p>
  </div>
<?php else: ?>
  <?php if (empty($alerts) === false): ?>
    <ul>
      <?php foreach ($alerts as $alert): ?>
        <li><?= $alert ?></li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>

  <form action="" method="post" enctype="multipart/form-data">

    <div class="honeypot">
      <label for="website">Website <abbr title="required">*</abbr></label>
      <input type="website" id="website" name="website">
    </div>

    <div class="form-field">
      <label for="file">Select files</label>
      <input name="file[]" type="file" multiple>
      <div class="help">You can upload up to 3 files. Each file may not be larger than 3 MB.</div>
    </div>

    <input type="submit" name="submit" value="Submit" class="button">

  </form>
<?php endif ?>

<?php snippet('footer') ?>
