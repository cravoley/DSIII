<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pedido->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedido Itens'), ['controller' => 'PedidoItens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido Iten'), ['controller' => 'PedidoItens', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pedidos form large-10 medium-9 columns">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Edit Pedido') ?></legend>
        <?php
            echo $this->Form->input('fornecedor_id', ['options' => $fornecedores]);
            echo $this->Form->input('datapedido');
            echo $this->Form->input('dataentrega', array('empty' => true, 'default' => ''));
            echo $this->Form->input('status_id', ['options' => $status]);
            echo $this->Form->input('dataprevisaoentrega', array('empty' => true, 'default' => ''));
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
