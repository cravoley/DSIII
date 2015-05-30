<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Fabrica Produto'), ['action' => 'edit', $fabricaProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fabrica Produto'), ['action' => 'delete', $fabricaProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fabricaProduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fabrica Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fabrica Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['controller' => 'MateriasPrimas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materias Prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fabricaProdutos view large-10 medium-9 columns">
    <h2><?= h($fabricaProduto->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Produto') ?></h6>
            <p><?= $fabricaProduto->has('produto') ? $this->Html->link($fabricaProduto->produto->id, ['controller' => 'Produtos', 'action' => 'view', $fabricaProduto->produto->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Materias Prima') ?></h6>
            <p><?= $fabricaProduto->has('materias_prima') ? $this->Html->link($fabricaProduto->materias_prima->id, ['controller' => 'MateriasPrimas', 'action' => 'view', $fabricaProduto->materias_prima->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fabricaProduto->id) ?></p>
            <h6 class="subheader"><?= __('Quantidade') ?></h6>
            <p><?= $this->Number->format($fabricaProduto->quantidade) ?></p>
        </div>
    </div>
</div>
