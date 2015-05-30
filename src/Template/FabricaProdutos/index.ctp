<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Fabrica Produto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['controller' => 'MateriasPrimas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materias Prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?></li>
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
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($fabricaProdutos as $fabricaProduto): ?>
        <tr>
            <td><?= $this->Number->format($fabricaProduto->id) ?></td>
            <td>
                <?= $fabricaProduto->has('produto') ? $this->Html->link($fabricaProduto->produto->id, ['controller' => 'Produtos', 'action' => 'view', $fabricaProduto->produto->id]) : '' ?>
            </td>
            <td>
                <?= $fabricaProduto->has('materias_prima') ? $this->Html->link($fabricaProduto->materias_prima->id, ['controller' => 'MateriasPrimas', 'action' => 'view', $fabricaProduto->materias_prima->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($fabricaProduto->quantidade) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $fabricaProduto->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fabricaProduto->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fabricaProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fabricaProduto->id)]) ?>
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
