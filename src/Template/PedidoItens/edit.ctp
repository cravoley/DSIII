<?php $this->assign('title', 'Item do pedido - Editar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $pedidoIten->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoIten->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
    </ul>
</div>
<div class="pedidoItens form large-10 medium-9 columns">
    <?= $this->Form->create($pedidoIten) ?>
    <fieldset>
        <legend><?= __('Editar item do pedido') ?></legend>
        <?php
            echo $this->Form->input('pedido_id', [
                'readonly' => 'readonly',
                'type' => 'text',
                'value' => $pedidoId
            ]);
            echo $this->Form->input('materia_prima_id', ['options' => $materiasPrimas]);
            echo $this->Form->input('quantidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
