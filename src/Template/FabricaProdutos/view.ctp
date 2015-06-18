<?php $this->assign('title', 'Lista técnica - Visualizar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $fabricaProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $fabricaProduto->id], ['confirm' => __('Tem certeza que deseja apagar o registro #{0}?', $fabricaProduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar listas técnicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova lista técnica'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="fabricaProdutos view large-10 medium-9 columns">
    <h2><?= h($fabricaProduto->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Produto') ?></h6>
            <p><?= $fabricaProduto->has('produto') ? $this->Html->link($fabricaProduto->produto->descricao, ['controller' => 'Produtos', 'action' => 'view', $fabricaProduto->produto->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Matéria Prima') ?></h6>
            <p><?= $fabricaProduto->has('materias_prima') ? $this->Html->link($fabricaProduto->materias_prima->nome, ['controller' => 'MateriasPrimas', 'action' => 'view', $fabricaProduto->materias_prima->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fabricaProduto->id) ?></p>
            <h6 class="subheader"><?= __('Quantidade') ?></h6>
            <p><?= $this->Number->format($fabricaProduto->quantidade) ?></p>
        </div>
    </div>
</div>
