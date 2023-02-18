<form class="contact-form" method="post" action="<?= $page->url() ?>" enctype="multipart/form-data">
  <!-- the field class is used for the CSS -->
  <div class="honey field">
    <label for="website">Website <abbr title="required">*</abbr></label>
    <input type="website" id="website" name="website">
  </div>

  <div class="form-element field">
    <label class="form-label" for="name">
      Name
      <abbr title="required">*</abbr>
    </label>
    <input type="text" id="name" name="name" placeholder="required" value="<?= esc($data['name'] ?? '', 'attr' ) ?>"
      required>
  </div>



  <div class="form-element field">
    <label for="email">
      Email
      <abbr title="required">*</abbr>
    </label>

    <input type="email" id="email" name="email" placeholder="required" value="<?= esc($data['email'] ?? '', 'attr') ?>"
      required>
  </div>

  <!-- Remove reference form element -->
  <!--
  <div class="form-element">
    <label for="reference">
      Job reference number <abbr title="required">*</abbr>
    </label>
    <input type="text" id="reference" name="reference"
      value="<?= esc($data['reference'] ?? get('reference') ?? '', 'attr') ?>" required>
  </div>
-->
  <div class="form-element field">
    <label for="message">
      Message
      <abbr title="required">*</abbr>
    </label>


    <textarea id="message" name="message" placeholder="required" required><?= esc($data['message'] ?? '') ?></textarea>
  </div>
  <!--
  <div class="form-element field">
    <label for="file">Upload your documents
      <span class="help">Max. 3 jpg or pdf files (max. file size 5MB each)</span>
    </label>

    <input name="file[]" type="file" multiple required>
  </div>
-->
  <div class="submit">
    <input type="submit" name="submit" value="Submit">
  </div>
</form>
