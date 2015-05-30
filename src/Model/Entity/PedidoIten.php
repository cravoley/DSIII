<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PedidoIten Entity.
 */
class PedidoIten extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'pedido_id' => true,
        'materia_prima_id' => true,
        'quantidade' => true,
        'pedido' => true,
        'materias_prima' => true,
    ];
}
