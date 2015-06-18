<?php $this->assign('title', 'Pedidos - Cadastrar'); ?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar pedidos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="pedidos form large-10 medium-9 columns">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Adicionar pedido') ?></legend>
        <?php
            echo $this->Form->input('fornecedor_id', ['options' => $fornecedores]);
            echo $this->Form->input('datapedido', ['label' => 'Data do pedido']);
            echo $this->Form->input('dataprevisaoentrega', array('empty' => true, 'default' => '', 'label'=>'Previsão de entrega'));
            echo $this->Form->input('status_id', ['options' => $status]);
            echo $this->Form->input('dataentrega', array('empty' => true, 'default' => '', 'label' => 'Data entregue'));
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar pedido >')) ?>
    <?= $this->Form->end() ?>
</div>
