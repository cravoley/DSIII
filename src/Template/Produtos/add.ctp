<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar Produtos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="produtos form large-10 medium-9 columns">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Adicionar produto') ?></legend>
        <?php
            echo $this->Form->input('descricao', ['label' => 'Nome']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
