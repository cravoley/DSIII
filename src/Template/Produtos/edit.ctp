<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Remover produto?', $produto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="produtos form large-10 medium-9 columns">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Editar produto') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
