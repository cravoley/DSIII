<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estoque Entity.
 */
class Estoque extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'materia_prima_id' => true,
        'quantidade' => true,
        'materias_prima' => true,
    ];
}
