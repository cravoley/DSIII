<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Pedido Iten'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['controller' => 'MateriasPrimas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materias Prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pedidoItens index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('pedido_id') ?></th>
            <th><?= $this->Paginator->sort('materia_prima_id') ?></th>
            <th><?= $this->Paginator->sort('quantidade') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pedidoItens as $pedidoIten): ?>
        <tr>
            <td><?= $this->Number->format($pedidoIten->id) ?></td>
            <td>
                <?= $pedidoIten->has('pedido') ? $this->Html->link($pedidoIten->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $pedidoIten->pedido->id]) : '' ?>
            </td>
            <td>
                <?= $pedidoIten->has('materias_prima') ? $this->Html->link($pedidoIten->materias_prima->id, ['controller' => 'MateriasPrimas', 'action' => 'view', $pedidoIten->materias_prima->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($pedidoIten->quantidade) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $pedidoIten->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedidoIten->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedidoIten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoIten->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
