<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FabricaProdutosFixture
 *
 */
class FabricaProdutosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'produto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'materia_prima_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'quantidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_tbl_fabricaproduto_tbl_produto1_idx' => ['type' => 'index', 'columns' => ['produto_id'], 'length' => []],
            'fk_tbl_fabricaproduto_tbl_materiaprima1_idx' => ['type' => 'index', 'columns' => ['materia_prima_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_tbl_fabricaproduto_tbl_produto1' => ['type' => 'foreign', 'columns' => ['produto_id'], 'references' => ['produtos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tbl_fabricaproduto_tbl_materiaprima1' => ['type' => 'foreign', 'columns' => ['materia_prima_id'], 'references' => ['materias_primas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'produto_id' => 1,
            'materia_prima_id' => 1,
            'quantidade' => 1
        ],
    ];
}
