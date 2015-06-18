<div class="estoques index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('materia_prima_id') ?></th>
            <th><?= $this->Paginator->sort('quantidade') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($estoques as $estoque): ?>
        <tr>
            <td><?= $this->Number->format($estoque->id) ?></td>
            <td>
                <?= $estoque->has('materias_prima') ? $this->Html->link($estoque->materias_prima->nome, ['controller' => 'MateriasPrimas', 'action' => 'view', $estoque->materias_prima->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($estoque->quantidade) ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Voltar')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Avançar') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
