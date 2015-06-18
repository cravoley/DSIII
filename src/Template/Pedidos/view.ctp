<?php $this->assign('title', 'Pedidos - Visualizar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar pedido'), ['action' => 'edit', $pedido->id]) ?> </li>
        <li><?= $this->Html->link(__('Listar pedidos'), ['action' => 'index']) ?> </li>
    </ul>
</div>
<div class="pedidos view large-10 medium-9 columns">
    <h2><?= h($pedido->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Fornecedor') ?></h6>
            <p><?= $pedido->has('fornecedore') ? $this->Html->link($pedido->fornecedore->nome, ['controller' => 'Fornecedores', 'action' => 'view', $pedido->fornecedore->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $pedido->has('status') ? $this->Html->link($pedido->status->descricao, ['controller' => 'Status', 'action' => 'view', $pedido->status->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Usuário') ?></h6>
            <p><?= $pedido->has('usuario') ? $this->Html->link($pedido->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $pedido->usuario->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pedido->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data do pedido') ?></h6>
            <p><?= h($pedido->datapedido) ?></p>
            <h6 class="subheader"><?= __('Data prevista para entrega') ?></h6>
            <p><?= h($pedido->dataprevisaoentrega) ?></p>
            <h6 class="subheader"><?= __('Data entregue') ?></h6>
            <p><?= h($pedido->dataentrega) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Itens do pedido') ?></h4>
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
