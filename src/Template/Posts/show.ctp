<h1><?= h($post->title) ?></h1>
<p>
    <?= nl2br(h($post->body)) ?>
</p>
<ul>
    <li><?= $this->Html->link('編集', ['action' => 'edit', $post->id]) ?></li>
    <li><a href="">削除</a></li>
    <li><?= $this->Html->link('戻る', ['action' => 'index']) ?></li>
</ul>