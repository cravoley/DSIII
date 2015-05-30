<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MateriasPrima Entity.
 */
class MateriasPrima extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
    ];
}
