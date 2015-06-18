<?php $this->assign('title', 'Usuários - Cadastrar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="usuarios form large-10 medium-9 columns">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Adionar Usuário') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('login');
            echo $this->Form->input('password');
            echo $this->Form->input('datacadastro', array('empty' => true, 'default' => '', 'label'=>'Data de cadastro'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
