<?php $this->assign('title', 'Valores e prazos dos produtos por fornecedor'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Criar relação matéria prima com fornecedor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Novo fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Nova matéria prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="matpriFornecedores index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('fornecedor_id') ?></th>
            <th><?= $this->Paginator->sort('materia_prima_id', 'Matéria prima') ?></th>
            <th><?= $this->Paginator->sort('preco', 'Preço') ?></th>
            <th><?= $this->Paginator->sort('diasprazo', 'Prazo de entrega') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
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
                <?= $this->Html->image("icon_view.png", [
                    "alt" => "Visualizar",
                    'url' => ['controller' => 'MatpriFornecedores', 'action' => 'view', $matpriFornecedore->id]
                ]); ?>
                <?= $this->Html->image("icon_edit.png", [
                    "alt" => "Editar",
                    'url' => ['controller' => 'MatpriFornecedores', 'action' => 'edit', $matpriFornecedore->id]
                ]); ?>
                <?= $this->Form->postLink(
                    $this->Html->image('icon_del.png',
                        array("alt" => __('Delete'), "title" => __('Delete'))),
                    array('action' => 'delete', $matpriFornecedore->id),
                    array('escape' => false, 'confirm' => __('Você deseja remover a matéria prima?', $matpriFornecedore->id))
                ); ?>
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
