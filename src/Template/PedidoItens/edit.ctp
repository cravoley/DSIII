<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pedidoIten->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoIten->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pedido Itens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['controller' => 'MateriasPrimas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materias Prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pedidoItens form large-10 medium-9 columns">
    <?= $this->Form->create($pedidoIten) ?>
    <fieldset>
        <legend><?= __('Edit Pedido Iten') ?></legend>
        <?php
            echo $this->Form->input('pedido_id', ['options' => $pedidos]);
            echo $this->Form->input('materia_prima_id', ['options' => $materiasPrimas]);
            echo $this->Form->input('quantidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
