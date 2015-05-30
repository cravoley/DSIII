<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MatpriFornecedore Entity.
 */
class MatpriFornecedore extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fornecedor_id' => true,
        'materia_prima_id' => true,
        'preco' => true,
        'diasprazo' => true,
        'fornecedore' => true,
        'materias_prima' => true,
    ];
}
