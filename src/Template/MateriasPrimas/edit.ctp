<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materiasPrima->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materiasPrima->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materias Primas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="materiasPrimas form large-10 medium-9 columns">
    <?= $this->Form->create($materiasPrima) ?>
    <fieldset>
        <legend><?= __('Edit Materias Prima') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
