<?php $this->assign('title', 'Status'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Status'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="status index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('descricao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($status as $status): ?>
        <tr>
            <td><?= $this->Number->format($status->id) ?></td>
            <td><?= h($status->descricao) ?></td>
            <td class="actions">
                <?= $this->Html->image("icon_view.png", [
                    "alt" => "Visualizar",
                    'url' => ['controller' => 'Status', 'action' => 'view', $status->id]
                ]); ?>
                <?= $this->Html->image("icon_edit.png", [
                    "alt" => "Editar",
                    'url' => ['controller' => 'Status', 'action' => 'edit', $status->id]
                ]); ?>
                <?= $this->Form->postLink(
                    $this->Html->image('icon_del.png',
                        array("alt" => __('Delete'), "title" => __('Delete'))),
                    array('action' => 'delete', $status->id),
                    array('escape' => false, 'confirm' => __('Você deseja remover o status?', $status->id))
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
