<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Fornecedore'), ['action' => 'edit', $fornecedore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fornecedore'), ['action' => 'delete', $fornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fornecedores view large-10 medium-9 columns">
    <h2><?= h($fornecedore->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($fornecedore->nome) ?></p>
            <h6 class="subheader"><?= __('Cnpj') ?></h6>
            <p><?= h($fornecedore->cnpj) ?></p>
            <h6 class="subheader"><?= __('Telefone') ?></h6>
            <p><?= h($fornecedore->telefone) ?></p>
            <h6 class="subheader"><?= __('Endereco') ?></h6>
            <p><?= h($fornecedore->endereco) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fornecedore->id) ?></p>
        </div>
    </div>
</div>
