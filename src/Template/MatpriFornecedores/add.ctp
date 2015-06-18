<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Relação matéria primas / fornecedor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Fornecedor'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Nova matéria prima'), ['controller' => 'MateriasPrimas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="matpriFornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($matpriFornecedore) ?>
    <fieldset>
        <legend><?= __('Criar relação entre matéria prima e fornecedor') ?></legend>
        <?php
            echo $this->Form->input('fornecedor_id', ['options' => $fornecedores]);
            echo $this->Form->input('materia_prima_id', ['options' => $materiasPrimas]);
            echo $this->Form->input('preco');
            echo $this->Form->input('diasprazo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
