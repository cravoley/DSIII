<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Estoque'), ['action' => 'edit', $estoque->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estoque'), ['action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estoques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estoque'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['controller' => 'MateriasPrimas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materias Prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="estoques view large-10 medium-9 columns">
    <h2><?= h($estoque->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Materias Prima') ?></h6>
            <p><?= $estoque->has('materias_prima') ? $this->Html->link($estoque->materias_prima->id, ['controller' => 'MateriasPrimas', 'action' => 'view', $estoque->materias_prima->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($estoque->id) ?></p>
            <h6 class="subheader"><?= __('Quantidade') ?></h6>
            <p><?= $this->Number->format($estoque->quantidade) ?></p>
        </div>
    </div>
</div>
