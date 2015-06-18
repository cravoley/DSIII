<?php $this->assign('title', 'Fornecedores - Cadastrar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar fornecedores'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="fornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($fornecedore) ?>
    <fieldset>
        <legend><?= __('Adicionar fornecedor') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('cnpj');
            echo $this->Form->input('telefone');
            echo $this->Form->input('endereco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
