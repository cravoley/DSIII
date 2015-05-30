<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatpriFornecedoresFixture
 *
 */
class MatpriFornecedoresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fornecedor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'materia_prima_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'preco' => ['type' => 'float', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'diasprazo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_rel_matprifornecedor_tbl_fornecedor_idx' => ['type' => 'index', 'columns' => ['fornecedor_id'], 'length' => []],
            'fk_rel_matprifornecedor_tbl_materiaprima1_idx' => ['type' => 'index', 'columns' => ['materia_prima_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_rel_matprifornecedor_tbl_fornecedor' => ['type' => 'foreign', 'columns' => ['fornecedor_id'], 'references' => ['fornecedores', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_rel_matprifornecedor_tbl_materiaprima1' => ['type' => 'foreign', 'columns' => ['materia_prima_id'], 'references' => ['materias_primas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'fornecedor_id' => 1,
            'materia_prima_id' => 1,
            'preco' => 1,
            'diasprazo' => 1
        ],
    ];
}
