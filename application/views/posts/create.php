<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?= form_open_multipart('posts/create'); ?>
  <fieldset>
    <div class="form-group">
      <label>Blog post titel</label>
      <input type="text" class="form-control" name="title" placeholder="Blog titel">
    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea id="editor1" class="form-control" name="body" rows="3" placeholder="Blog content"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="categorie_id">
            <?php foreach ($post_categories as $category): ?>
                <option value="<?= $category['id']?>"><?= $category['name']?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Uppload Image</label>
        <input type="file" name="userfile" size="20">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
