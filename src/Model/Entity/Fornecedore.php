<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fornecedore Entity.
 */
class Fornecedore extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'cnpj' => true,
        'telefone' => true,
        'endereco' => true,
    ];
}
