<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar Status'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="status form large-10 medium-9 columns">
    <?= $this->Form->create($status) ?>
    <fieldset>
        <legend><?= __('Adicionar Status') ?></legend>
        <?php
            echo $this->Form->input('descricao', ['label' => 'Descrição']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
