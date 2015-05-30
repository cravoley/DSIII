<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fabricaProduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fabricaProduto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fabrica Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['controller' => 'MateriasPrimas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materias Prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="fabricaProdutos form large-10 medium-9 columns">
    <?= $this->Form->create($fabricaProduto) ?>
    <fieldset>
        <legend><?= __('Edit Fabrica Produto') ?></legend>
        <?php
            echo $this->Form->input('produto_id', ['options' => $produtos]);
            echo $this->Form->input('materia_prima_id', ['options' => $materiasPrimas]);
            echo $this->Form->input('quantidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
