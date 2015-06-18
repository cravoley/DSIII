<?php $this->assign('title', 'Valores e prazos dos produtos por fornecedor - Editar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Remover'),
                ['action' => 'delete', $matpriFornecedore->id],
                ['confirm' => __('Você tem certeza que deseja apagar esta relação de matéria prima?', $matpriFornecedore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Relação matéria primas / fornecedor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Nova matéria prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="matpriFornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($matpriFornecedore) ?>
    <fieldset>
        <legend><?= __('Editar relação entre matéria prima e fornecedor') ?></legend>
        <?php
            echo $this->Form->input('fornecedor_id', ['options' => $fornecedores]);
            echo $this->Form->input('materia_prima_id', ['options' => $materiasPrimas]);
            echo $this->Form->input('preco', ['label' => 'Preço']);
            echo $this->Form->input('diasprazo', ['label' => 'Prazo de entrega (dias)']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
