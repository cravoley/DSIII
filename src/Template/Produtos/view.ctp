<?php $this->assign('title', 'Produtos - Visualizar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $produto->id], ['confirm' => __('Você tem certeza que deseja remover o produto?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="produtos view large-10 medium-9 columns">
    <h2><?= h($produto->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descrição') ?></h6>
            <p><?= h($produto->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($produto->id) ?></p>
        </div>
    </div>
</div>
