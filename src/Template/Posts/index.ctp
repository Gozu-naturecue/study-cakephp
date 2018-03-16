<h1>記事一覧</h1>
<ul>
    <?php foreach($posts as $post) : ?>
        <li>
            <?= $this->Html->link(h($post->title), ['action' => 'show', $post->id]) ?>
        </li>
    <?php endforeach; ?>
</ul>