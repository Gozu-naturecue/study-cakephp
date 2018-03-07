<h1>記事の編集</h1>
<?= $this->Form->create($post) ?>
<?= $this->Form->control('title') ?>
<?= $this->Form->control('body') ?>
<?= $this->Form->button('更新') ?>
<?= $this->Form->end() ?>

<ul>
    <li>
        <?=
            $this->Form->postLink(
                '削除',
                ['action' => 'delete', $post->id],
                ['confirm' =>'削除してよろしいですか？']
            );
        ?>
    </li>
    <li><?= $this->Html->link('戻る', ['action' => 'show', $post->id]) ?></li>
</ul>