<?php $this->assign('title', 'Item do pedido - Visualizar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar iten do pedido'), ['action' => 'edit', $pedidoIten->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $pedidoIten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoIten->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
    </ul>
</div>
<div class="pedidoItens view large-10 medium-9 columns">
    <h2><?= h($pedidoIten->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Pedido') ?></h6>
            <p><?= $pedidoIten->has('pedido') ? $this->Html->link($pedidoIten->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $pedidoIten->pedido->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Materias Prima') ?></h6>
            <p><?= $pedidoIten->has('materias_prima') ? $this->Html->link($pedidoIten->materias_prima->nome, ['controller' => 'MateriasPrimas', 'action' => 'view', $pedidoIten->materias_prima->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pedidoIten->id) ?></p>
            <h6 class="subheader"><?= __('Quantidade') ?></h6>
            <p><?= $this->Number->format($pedidoIten->quantidade) ?></p>
        </div>
    </div>
</div>
