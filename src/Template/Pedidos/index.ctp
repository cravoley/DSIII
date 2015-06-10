<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?></li>
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
<div class="pedidos index large-10 medium-9 columns">
    <form>
        <label for="dateStart">Data inicial</label>
        <input type="text" name="startDate" class="datepicker" data-relative="endDate" />
        <label for="dateEnd">Data final</label>
        <input type="text" name="endDate" class="datepicker" />
        <input type="submit" value="filtrar" />
    </form>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('fornecedor_id') ?></th>
            <th><?= $this->Paginator->sort('datapedido') ?></th>
            <th><?= $this->Paginator->sort('dataentrega') ?></th>
            <th><?= $this->Paginator->sort('status_id') ?></th>
            <th><?= $this->Paginator->sort('dataprevisaoentrega') ?></th>
            <th><?= $this->Paginator->sort('usuario_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td><?= $this->Number->format($pedido->id) ?></td>
            <td>
                <?= $pedido->has('fornecedore') ? $this->Html->link($pedido->fornecedore->nome, ['controller' => 'Fornecedores', 'action' => 'view', $pedido->fornecedore->id]) : '' ?>
            </td>
            <td><?= h($pedido->datapedido) ?></td>
            <td><?= h($pedido->dataentrega) ?></td>
            <td>
                <?= $pedido->has('status') ? $this->Html->link($pedido->status->descricao, ['controller' => 'Status', 'action' => 'view', $pedido->status->id]) : '' ?>
            </td>
            <td><?= h($pedido->dataprevisaoentrega) ?></td>
            <td>
                <?= $pedido->has('usuario') ? $this->Html->link($pedido->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $pedido->usuario->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $pedido->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedido->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?>
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
