<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $fornecedore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $fornecedore->id], ['confirm' => __('Tem certeza que deseja deletar o fornecedor: {0}?', $fornecedore->nome)]) ?> </li>
        <li><?= $this->Html->link(__('Listar fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar fornecedor'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fornecedores view large-10 medium-9 columns">
    <h2><?= h($fornecedore->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($fornecedore->nome) ?></p>
            <h6 class="subheader"><?= __('CNPJ') ?></h6>
            <p><?= h($fornecedore->cnpj) ?></p>
            <h6 class="subheader"><?= __('Telefone') ?></h6>
            <p><?= h($fornecedore->telefone) ?></p>
            <h6 class="subheader"><?= __('Endereço') ?></h6>
            <p><?= h($fornecedore->endereco) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fornecedore->id) ?></p>
        </div>
    </div>
</div>
