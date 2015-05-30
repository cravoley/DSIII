<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fornecedore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="fornecedores form large-10 medium-9 columns">
    <?= $this->Form->create($fornecedore) ?>
    <fieldset>
        <legend><?= __('Edit Fornecedore') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('cnpj');
            echo $this->Form->input('telefone');
            echo $this->Form->input('endereco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
