<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Estoque'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['controller' => 'MateriasPrimas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materias Prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="estoques index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('materia_prima_id') ?></th>
            <th><?= $this->Paginator->sort('quantidade') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($estoques as $estoque): ?>
        <tr>
            <td><?= $this->Number->format($estoque->id) ?></td>
            <td>
                <?= $estoque->has('materias_prima') ? $this->Html->link($estoque->materias_prima->nome, ['controller' => 'MateriasPrimas', 'action' => 'view', $estoque->materias_prima->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($estoque->quantidade) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $estoque->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estoque->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id)]) ?>
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
