<?php $this->assign('title', 'Status - Visualizar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $status->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $status->id], ['confirm' => __('Você deseja remover o status?', $status->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Status'), ['action' => 'add']) ?> </li>
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
    <h4 class="subheader"><?= __('Pedidos relacionados') ?></h4>
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
                <?= $this->Html->image("icon_view.png", [
                                "alt" => "Visualizar",
                                'url' => ['controller' => 'Pedidos', 'action' => 'view', $pedidos->id]
                            ]); ?>
                            <?= $this->Html->image("icon_edit.png", [
                                "alt" => "Editar",
                                'url' => ['controller' => 'Pedidos', 'action' => 'edit', $pedidos->id]
                            ]); ?>
                            <?= $this->Form->postLink(
                                $this->Html->image('icon_del.png',
                                    array("alt" => __('Delete'), "title" => __('Delete'))),
                                array('controller' => 'Pedidos', 'action' => 'delete', $pedidos->id),
                                array('escape' => false, 'confirm' => __('Você deseja remover o pedido?', $pedidos->id))
                            ); ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
