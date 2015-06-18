<?php $this->assign('title', 'Fornecedores'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Adicionar fornecedor'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="fornecedores index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('CNPJ') ?></th>
            <th><?= $this->Paginator->sort('telefone') ?></th>
            <th><?= $this->Paginator->sort('endereço') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($fornecedores as $fornecedore): ?>
        <tr>
            <td><?= $this->Number->format($fornecedore->id) ?></td>
            <td><?= h($fornecedore->nome) ?></td>
            <td><?= h($fornecedore->cnpj) ?></td>
            <td><?= h($fornecedore->telefone) ?></td>
            <td><?= h($fornecedore->endereco) ?></td>
            <td class="actions">
                <?= $this->Html->image("icon_view.png", [
                    "alt" => "Visualizar",
                    'url' => ['controller' => 'Fornecedores', 'action' => 'view', $fornecedore->id]
                ]); ?>
                <?= $this->Html->image("icon_edit.png", [
                    "alt" => "Editar",
                    'url' => ['controller' => 'Fornecedores', 'action' => 'edit', $fornecedore->id]
                ]); ?>

                <?= $this->Form->postLink(
                    $this->Html->image('icon_del.png',
                        array("alt" => __('Delete'), "title" => __('Delete'))),
                    array('action' => 'delete', $fornecedore->id),
                    array('escape' => false, 'confirm' => __('Tem certeza que deseja apagar o registro #{0}?', $fornecedore->id))
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
