<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?= form_open('posts/update/'); ?>
<input type="hidden" name="post_id" value="<?= $post['post_id']; ?>">
  <fieldset>
    <div class="form-group">
      <label>Blog post titel</label>
      <input type="text" class="form-control" name="title" placeholder="Blog titel" value="<?= $post['title'] ?>">
    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea id="editor1" class="form-control" name="body" rows="3" placeholder="Blog content"><?= $post['body'] ?></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="categorie_id">
            <?php foreach ($post_categories as $category): ?>
                <option value="<?= $category['id']?>"><?= $category['name']?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
