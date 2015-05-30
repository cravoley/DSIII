<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Matpri Fornecedore'), ['action' => 'edit', $matpriFornecedore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Matpri Fornecedore'), ['action' => 'delete', $matpriFornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matpriFornecedore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matpri Fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matpri Fornecedore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['controller' => 'Fornecedores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['controller' => 'MateriasPrimas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materias Prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="matpriFornecedores view large-10 medium-9 columns">
    <h2><?= h($matpriFornecedore->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Fornecedore') ?></h6>
            <p><?= $matpriFornecedore->has('fornecedore') ? $this->Html->link($matpriFornecedore->fornecedore->id, ['controller' => 'Fornecedores', 'action' => 'view', $matpriFornecedore->fornecedore->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Materias Prima') ?></h6>
            <p><?= $matpriFornecedore->has('materias_prima') ? $this->Html->link($matpriFornecedore->materias_prima->id, ['controller' => 'MateriasPrimas', 'action' => 'view', $matpriFornecedore->materias_prima->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($matpriFornecedore->id) ?></p>
            <h6 class="subheader"><?= __('Preco') ?></h6>
            <p><?= $this->Number->format($matpriFornecedore->preco) ?></p>
            <h6 class="subheader"><?= __('Diasprazo') ?></h6>
            <p><?= $this->Number->format($matpriFornecedore->diasprazo) ?></p>
        </div>
    </div>
</div>
