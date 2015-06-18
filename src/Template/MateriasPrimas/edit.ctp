<?php $this->assign('title', 'Matérias Primas - Editar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Remover'),
                ['action' => 'delete', $materiasPrima->id],
                ['confirm' => __('Você deseja remover a matéria prima?', $materiasPrima->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar matéria prima'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="materiasPrimas form large-10 medium-9 columns">
    <?= $this->Form->create($materiasPrima) ?>
    <fieldset>
        <legend><?= __('Editar Matéria Prima') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
