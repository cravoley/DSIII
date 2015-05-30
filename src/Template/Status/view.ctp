<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Status'), ['action' => 'edit', $status->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Status'), ['action' => 'delete', $status->id], ['confirm' => __('Are you sure you want to delete # {0}?', $status->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="status view large-10 medium-9 columns">
    <h2><?= h($status->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($status->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($status->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Pedidos') ?></h4>
    <?php if (!empty($status->pedidos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Fornecedor Id') ?></th>
            <th><?= __('Datapedido') ?></th>
            <th><?= __('Dataentrega') ?></th>
            <th><?= __('Status Id') ?></th>
            <th><?= __('Dataprevisaoentrega') ?></th>
            <th><?= __('Usuario Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($status->pedidos as $pedidos): ?>
        <tr>
            <td><?= h($pedidos->id) ?></td>
            <td><?= h($pedidos->fornecedor_id) ?></td>
            <td><?= h($pedidos->datapedido) ?></td>
            <td><?= h($pedidos->dataentrega) ?></td>
            <td><?= h($pedidos->status_id) ?></td>
            <td><?= h($pedidos->dataprevisaoentrega) ?></td>
            <td><?= h($pedidos->usuario_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Pedidos', 'action' => 'view', $pedidos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Pedidos', 'action' => 'edit', $pedidos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedidos', 'action' => 'delete', $pedidos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
