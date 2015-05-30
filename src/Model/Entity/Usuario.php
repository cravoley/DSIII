<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity.
 */
class Usuario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'login' => true,
        'senha' => true,
        'datacadastro' => true,
        'pedidos' => true,
    ];
}
