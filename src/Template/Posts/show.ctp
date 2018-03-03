<h1><?= h($post->title) ?></h1>
<p>
    <?= nl2br(h($post->body)) ?>
</p>
<ul>
    <li><a href="">編集</a></li>
    <li><a href="">削除</a></li>
    <li><?= $this->Html->link('戻る', ['action' => 'index']) ?></li>
</ul>