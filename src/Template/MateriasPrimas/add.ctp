<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar matéria primas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="materiasPrimas form large-10 medium-9 columns">
    <?= $this->Form->create($materiasPrima) ?>
    <fieldset>
        <legend><?= __('Adicionar Matéria Prima') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
