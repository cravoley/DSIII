<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $usuario->id], ['confirm' => __('Você deseja remover o usuário?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar usuários'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo usuário'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="usuarios view large-10 medium-9 columns">
    <h2><?= h($usuario->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($usuario->nome) ?></p>
            <h6 class="subheader"><?= __('Login') ?></h6>
            <p><?= h($usuario->login) ?></p>
            <h6 class="subheader"><?= __('Senha') ?></h6>
            <p><?= h($usuario->senha) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($usuario->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data de cadastro') ?></h6>
            <p><?= h($usuario->datacadastro) ?></p>
        </div>
    </div>
</div>

