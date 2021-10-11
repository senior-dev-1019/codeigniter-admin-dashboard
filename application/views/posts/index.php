<h2><?= $title; ?></h2>
<?php foreach ($posts as $post) : ?>
<h3><?= $post['title']; ?></h3>
<small class="post-date">Posted on: <?= $post['created_at']; ?> in <?= $post['name'];?><br></small>
<?= word_limiter($post['body'],60); ?>
<p><br><a class="btn btn-primary" href="/posts/<?= $post['slug']; ?>">Read more</a></p>
<?php endforeach; ?>
