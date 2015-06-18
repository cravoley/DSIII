<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Remover'),
                ['action' => 'delete', $status->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $status->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Status'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="status form large-10 medium-9 columns">
    <?= $this->Form->create($status) ?>
    <fieldset>
        <legend><?= __('Editar Status') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
