<?php $this->assign('title', 'Pedidos - Editar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar pedidos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="pedidos form large-10 medium-9 columns">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Editar Pedido') ?></legend>
        <?php
            echo $this->Form->input('fornecedor_id', ['options' => $fornecedores]);
            echo $this->Form->input('datapedido', ['label' => 'Data do pedido']);
            echo $this->Form->input('dataprevisaoentrega', array('empty' => true, 'default' => '', 'label'=>'Previsão de entrega'));
            echo $this->Form->input('status_id', ['options' => $status]);
            echo $this->Form->input('dataentrega', array('empty' => true, 'default' => '', 'label' => 'Data entregue'));
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
<div class="related row">
    <div class="column large-12">
        <h4 class="subheader"><?= __('Itens do pedido') ?></h4>
        <?= $this->Html->link(__('Adicionar Item'), ['controller' => 'PedidoItens', 'action' => 'add', $pedido->id]) ?>
        <?php if (!empty($pedido->pedido_itens)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Materia Prima Id') ?></th>
                    <th><?= __('Quantidade') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($pedido->pedido_itens as $pedidoItens): ?>
                    <tr>
                        <td><?= h($pedidoItens->materia_prima_nome) ?></td>
                        <td><?= h($pedidoItens->quantidade) ?></td>

                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['controller' => 'PedidoItens', 'action' => 'view', $pedidoItens->id]) ?>

                            <?= $this->Html->link(__('Editar'), ['controller' => 'PedidoItens', 'action' => 'edit', $pedidoItens->id]) ?>

                            <?= $this->Form->postLink(__('Deletar'), ['controller' => 'PedidoItens', 'action' => 'delete', $pedidoItens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoItens->id)]) ?>

                        </td>
                    </tr>

                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
