<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FabricaProduto Entity.
 */
class FabricaProduto extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'produto_id' => true,
        'materia_prima_id' => true,
        'quantidade' => true,
        'produto' => true,
        'materias_prima' => true,
    ];
}
