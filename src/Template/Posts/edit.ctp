<h1>記事の編集</h1>
<?= $this->Form->create($post, ['url' => ['action' => 'update']]) ?>
<?= $this->Form->control('title') ?>
<?= $this->Form->control('body') ?>
<?= $this->Form->button('更新') ?>
<?= $this->Form->end() ?>

<ul>
    <li><a href="">削除</a></li>
    <li><?= $this->Html->link('戻る', ['action' => 'show', $post->id]) ?></li>
</ul>