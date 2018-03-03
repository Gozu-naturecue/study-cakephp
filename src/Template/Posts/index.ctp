<h1>記事一覧</h1>
<ul>
    <?php foreach($posts as $post) : ?>
        <li><a href=""><?= h($post->title); ?></a></li>
    <?php endforeach; ?>
</ul>