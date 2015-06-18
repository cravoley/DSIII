<?php $this->assign('title', 'Matérias Primas - Visualizar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $materiasPrima->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $materiasPrima->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiasPrima->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar matérias primas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova matéria prima'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="materiasPrimas view large-10 medium-9 columns">
    <h2><?= h($materiasPrima->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($materiasPrima->nome) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($materiasPrima->id) ?></p>
        </div>
    </div>
</div>
