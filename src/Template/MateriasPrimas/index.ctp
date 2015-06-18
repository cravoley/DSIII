<?php $this->assign('title', 'Matérias Primas'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nova Matéria prima'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="materiasPrimas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($materiasPrimas as $materiasPrima): ?>
        <tr>
            <td><?= $this->Number->format($materiasPrima->id) ?></td>
            <td><?= h($materiasPrima->nome) ?></td>
            <td class="actions">
                <?= $this->Html->image("icon_view.png", [
                    "alt" => "Visualizar",
                    'url' => ['controller' => 'MateriasPrimas', 'action' => 'view', $materiasPrima->id]
                ]); ?>
                <?= $this->Html->image("icon_edit.png", [
                    "alt" => "Editar",
                    'url' => ['controller' => 'MateriasPrimas', 'action' => 'edit', $materiasPrima->id]
                ]); ?>
                <?= $this->Form->postLink(
                    $this->Html->image('icon_del.png',
                        array("alt" => __('Delete'), "title" => __('Delete'))),
                    array('action' => 'delete', $materiasPrima->id),
                    array('escape' => false, 'confirm' => __('Você deseja remover a matéria prima?', $materiasPrima->id))
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
