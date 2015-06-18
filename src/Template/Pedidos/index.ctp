<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo pedido'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="pedidos index large-10 medium-9 columns">
    <form>
        <label for="dateStart">Data pedido inicial</label>
        <input type="text" name="startDate" class="datepicker" data-relative="endDate" />
        <label for="dateEnd">Data  pedido final</label>
        <input type="text" name="endDate" class="datepicker" />
        <input type="submit" value="filtrar" />
    </form>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('fornecedor_id') ?></th>
            <th><?= $this->Paginator->sort('datapedido', 'Data pedido') ?></th>
            <th><?= $this->Paginator->sort('dataprevisaoentrega', 'Data prevista') ?></th>
            <th><?= $this->Paginator->sort('status_id') ?></th>
            <th><?= $this->Paginator->sort('dataentrega', 'Data entregue') ?></th>
            <th><?= $this->Paginator->sort('usuario_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td><?= $this->Number->format($pedido->id) ?></td>
            <td>
                <?= $pedido->has('fornecedore') ? $this->Html->link($pedido->fornecedore->nome, ['controller' => 'Fornecedores', 'action' => 'view', $pedido->fornecedore->id]) : '' ?>
            </td>
            <td><?= h($pedido->datapedido) ?></td>
            <td><?= h($pedido->dataprevisaoentrega) ?></td>
            <td>
                <?= $pedido->has('status') ? $this->Html->link($pedido->status->descricao, ['controller' => 'Status', 'action' => 'view', $pedido->status->id]) : '' ?>
            </td>
            <td><?= h($pedido->dataentrega) ?></td>
            <td>
                <?= $pedido->has('usuario') ? $this->Html->link($pedido->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $pedido->usuario->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->image("icon_view.png", [
                    "alt" => "Visualizar",
                    'url' => ['controller' => 'Pedidos', 'action' => 'view', $pedido->id]
                ]); ?>
                <?= $this->Html->image("icon_edit.png", [
                    "alt" => "Editar",
                    'url' => ['controller' => 'Pedidos', 'action' => 'edit', $pedido->id]
                ]); ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
