<?php

$this->layout = 'login';

?>

<div class="usuarios form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Insira o usuário e senha') ?></legend>
        <?= $this->Form->input('login') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Entrar')); ?>
    <?= $this->Form->end() ?>
</div>
