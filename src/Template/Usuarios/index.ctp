<?php $this->assign('title', 'Usuários'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="usuarios index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('login') ?></th>
            <th><?= $this->Paginator->sort('senha') ?></th>
            <th><?= $this->Paginator->sort('datacadastro', 'Data de cadastro') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= $this->Number->format($usuario->id) ?></td>
            <td><?= h($usuario->nome) ?></td>
            <td><?= h($usuario->login) ?></td>
            <td><?= h($usuario->senha) ?></td>
            <td><?= h($usuario->datacadastro) ?></td>
            <td class="actions">
                <?= $this->Html->image("icon_view.png", [
                        "alt" => "Visualizar",
                        'url' => ['controller' => 'Usuarios', 'action' => 'view', $usuario->id]
                    ]); ?>
                    <?= $this->Html->image("icon_edit.png", [
                        "alt" => "Editar",
                        'url' => ['controller' => 'Usuarios', 'action' => 'edit', $usuario->id]
                    ]); ?>
                    <?= $this->Form->postLink(
                        $this->Html->image('icon_del.png',
                            array("alt" => __('Delete'), "title" => __('Delete'))),
                        array('action' => 'delete', $usuario->id),
                        array('escape' => false, 'confirm' => __('Você deseja remover?', $usuario->id))
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
