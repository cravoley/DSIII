<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $matpriFornecedore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $matpriFornecedore->id], ['confirm' => __('Você tem certeza que deseja deletar?', $matpriFornecedore->id)]) ?> </li>
        <li><?= $this->Html->link(__('Relação matéria primas / fornecedor'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="matpriFornecedores view large-10 medium-9 columns">
    <h2><?= h($matpriFornecedore->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Fornecedor') ?></h6>
            <p><?= $matpriFornecedore->has('fornecedore') ? $this->Html->link($matpriFornecedore->fornecedore->nome, ['controller' => 'Fornecedores', 'action' => 'view', $matpriFornecedore->fornecedore->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Matéria Prima') ?></h6>
            <p><?= $matpriFornecedore->has('materias_prima') ? $this->Html->link($matpriFornecedore->materias_prima->nome, ['controller' => 'MateriasPrimas', 'action' => 'view', $matpriFornecedore->materias_prima->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($matpriFornecedore->id) ?></p>
            <h6 class="subheader"><?= __('Preco') ?></h6>
            <p><?= $this->Number->format($matpriFornecedore->preco) ?></p>
            <h6 class="subheader"><?= __('Prazo de entrega') ?></h6>
            <p><?= $this->Number->format($matpriFornecedore->diasprazo) ?></p>
        </div>
    </div>
</div>
