<?php $this->assign('title', 'Lista técnica'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nova lista técnica'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="fabricaProdutos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('produto_id') ?></th>
            <th><?= $this->Paginator->sort('materia_prima_id') ?></th>
            <th><?= $this->Paginator->sort('quantidade') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($fabricaProdutos as $fabricaProduto): ?>
        <tr>
            <td><?= $this->Number->format($fabricaProduto->id) ?></td>
            <td>
                <?= $fabricaProduto->has('produto') ? $this->Html->link($fabricaProduto->produto->descricao, ['controller' => 'Produtos', 'action' => 'view', $fabricaProduto->produto->id]) : '' ?>
            </td>
            <td>
                <?= $fabricaProduto->has('materias_prima') ? $this->Html->link($fabricaProduto->materias_prima->nome, ['controller' => 'MateriasPrimas', 'action' => 'view', $fabricaProduto->materias_prima->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($fabricaProduto->quantidade) ?></td>
            <td class="actions">
                <?= $this->Html->image("icon_view.png", [
                    "alt" => "Visualizar",
                    'url' => ['controller' => 'FabricaProdutos', 'action' => 'view', $fabricaProduto->id]
                ]); ?>
                <?= $this->Html->image("icon_edit.png", [
                    "alt" => "Editar",
                    'url' => ['controller' => 'FabricaProdutos', 'action' => 'edit', $fabricaProduto->id]
                ]); ?>

                <?= $this->Form->postLink(
                    $this->Html->image('icon_del.png',
                        array("alt" => __('Delete'), "title" => __('Delete'))),
                    array('action' => 'delete', $fabricaProduto->id),
                    array('escape' => false, 'confirm' => __('Tem certeza que deseja apagar o registro #{0}?', $fabricaProduto->id))
                ); ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Voltar')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Avançar') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
