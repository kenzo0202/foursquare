<div class="users form">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('ユーザーを追加する') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
        <?= $this->Form->input('role',['options' => ['admin' => 'Admin', 'author' => 'Author']]) ?>
    </fieldset>
    <?= $this->Form->button("ユーザーを登録する") ?>
    <?= $this->Form->end() ?>
</div>