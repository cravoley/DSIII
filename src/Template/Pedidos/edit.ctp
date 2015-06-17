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
<div class="related row">
    <div class="column large-12">
        <h4 class="subheader"><?= __('Related PedidoItens') ?></h4>
        <?= $this->Html->link(__('Adicionar Item'), ['controller' => 'PedidoItens', 'action' => 'add', $pedido->id]) ?>
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