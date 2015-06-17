<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['controller' => 'Fornecedores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedido Itens'), ['controller' => 'PedidoItens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido Iten'), ['controller' => 'PedidoItens', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pedidos view large-10 medium-9 columns">
    <h2><?= h($pedido->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Fornecedore') ?></h6>
            <p><?= $pedido->has('fornecedore') ? $this->Html->link($pedido->fornecedore->id, ['controller' => 'Fornecedores', 'action' => 'view', $pedido->fornecedore->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $pedido->has('status') ? $this->Html->link($pedido->status->id, ['controller' => 'Status', 'action' => 'view', $pedido->status->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Usuario') ?></h6>
            <p><?= $pedido->has('usuario') ? $this->Html->link($pedido->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $pedido->usuario->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pedido->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Datapedido') ?></h6>
            <p><?= h($pedido->datapedido) ?></p>
            <h6 class="subheader"><?= __('Dataentrega') ?></h6>
            <p><?= h($pedido->dataentrega) ?></p>
            <h6 class="subheader"><?= __('Dataprevisaoentrega') ?></h6>
            <p><?= h($pedido->dataprevisaoentrega) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related PedidoItens') ?></h4>
    <?php if (!empty($pedido->pedido_itens)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Pedido Id') ?></th>
            <th><?= __('Materia Prima Id') ?></th>
            <th><?= __('Quantidade') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($pedido->pedido_itens as $pedidoItens): ?>
        <tr>
            <td><?= h($pedidoItens->id) ?></td>
            <td><?= h($pedidoItens->pedido_id) ?></td>
            <td><?= h($pedidoItens->materia_prima_nome) ?></td>
            <td><?= h($pedidoItens->quantidade) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'PedidoItens', 'action' => 'view', $pedidoItens->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'PedidoItens', 'action' => 'edit', $pedidoItens->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PedidoItens', 'action' => 'delete', $pedidoItens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoItens->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
