<h2><?= $post['title']; ?></h2>
<div class="post-body">
<small class="post-date">Posted on: <?= $post['created_at']; ?><br></small>
<?= $post['body']; ?>
</div>

<hr>
<a class="btn btn-primary pull-left" href="/posts/edit/<?= $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/' . $post['post_id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>
