<?php snippet('header') ?>
<!-- the success.txt file is in contents > success(folder) -->
<?php if ($success): ?>
<div class="alert success">
  <p><?= $success ?></p>
</div>

<?php else: ?>
<!-- If the alerts session is not empty loop through and show the alert(s) -->
<?php if (empty($alerts) === false): ?>
<ul>
  <?php foreach ($alerts as $alert): ?>
  <li><?= $alert ?></li>
  <?php endforeach ?>
</ul>
<?php endif ?>
<!-- Begin the upload form section on the page -->
<form action="" method="post" enctype="multipart/form-data">
  <!-- Add a honeypot to ensnare bots -->
  <div class="honeypot">
    <label for="website">Website <abbr title="required">*</abbr></label>
    <input type="website" id="website" name="website">
  </div>

  <!-- The upload part -->
  <div class="form-field">
    <label for="file">Select files</label>
    <input name="file[]" type="file" multiple>
    <div class="help">You can upload up to 3 files. Each file may not be larger than 3 MB.</div>
  </div>
  <!-- The submit button -->
  <input type="submit" name="submit" value="Submit" class="button">

</form>
<?php endif ?>

<?php snippet('footer') ?>