<?php snippet('header') ?>
<main class="main page-margin contact">
  <h1><?= $page->title()->html() ?></h1>

  <?php if($success): ?>
  <div class="alert success">
    <p><?= $success ?></p>
  </div>
  <?php else: ?>
  <?php if (isset($alert['error'])): ?>
  <div><?= $alert['error'] ?></div>
  <?php endif ?>
  <form method="post" action="<?= $page->url() ?>">
    <div class="honeypot">
      <label for="website">Website <abbr title="required">*</abbr></label>
      <input type="url" id="website" name="website" tabindex="-1">
    </div>
    <div class="field">
      <label for="name">
        Name
      </label>
      <abbr title="required">*</abbr>
      <input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
      <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
    </div>
    <div class="field">
      <label for="email">
        Email
      </label>
      <abbr title="required">*</abbr>
      <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
      <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
    </div>
    <div class="field">
      <label for="text">
        Text
      </label>
      <abbr title="required">*</abbr>
      <textarea id="text" name="text" required>
                    <?= esc($data['text'] ?? '') ?>
                </textarea>
      <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
    </div>

    <div class="field submit">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
  <p> <abbr title="required">*</abbr> = Required </p>
  <?php endif ?>

</main>

</body>

</html>
