<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity.
 */
class Pedido extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fornecedor_id' => true,
        'datapedido' => true,
        'dataentrega' => true,
        'status_id' => true,
        'dataprevisaoentrega' => true,
        'usuario_id' => true,
        'fornecedore' => true,
        'status' => true,
        'usuario' => true,
        'pedido_itens' => true,
    ];
}
