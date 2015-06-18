<?php $this->assign('title', 'Lista técnica - Editar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar lista técnica'),
                ['action' => 'delete', $fabricaProduto->id],
                ['confirm' => __('Tem certeza que deseja apagar o registro ## {0}?', $fabricaProduto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar todas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="fabricaProdutos form large-10 medium-9 columns">
    <?= $this->Form->create($fabricaProduto) ?>
    <fieldset>
        <legend><?= __('Editando lista técnica') ?></legend>
        <?php
            echo $this->Form->input('produto_id', ['options' => $produtos]);
            echo $this->Form->input('materia_prima_id', ['options' => $materiasPrimas]);
            echo $this->Form->input('quantidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
