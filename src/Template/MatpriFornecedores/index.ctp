<?php $this->assign('title', 'Valores e prazos dos produtos por fornecedor'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Matpri Fornecedore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['controller' => 'MateriasPrimas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materias Prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="matpriFornecedores index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('fornecedor_id') ?></th>
            <th><?= $this->Paginator->sort('materia_prima_id') ?></th>
            <th><?= $this->Paginator->sort('preco') ?></th>
            <th><?= $this->Paginator->sort('diasprazo') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($matpriFornecedores as $matpriFornecedore): ?>
        <tr>
            <td><?= $this->Number->format($matpriFornecedore->id) ?></td>
            <td>
                <?= $matpriFornecedore->has('fornecedore') ? $this->Html->link($matpriFornecedore->fornecedore->nome, ['controller' => 'Fornecedores', 'action' => 'view', $matpriFornecedore->fornecedore->id]) : '' ?>
            </td>
            <td>
                <?= $matpriFornecedore->has('materias_prima') ? $this->Html->link($matpriFornecedore->materias_prima->nome, ['controller' => 'MateriasPrimas', 'action' => 'view', $matpriFornecedore->materias_prima->id]) : '' ?>
            </td>
            <td><?= 'R$ '.$this->Number->format($matpriFornecedore->preco).',00' ?></td>
            <td><?= $this->Number->format($matpriFornecedore->diasprazo) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $matpriFornecedore->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $matpriFornecedore->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $matpriFornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matpriFornecedore->id)]) ?>
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
