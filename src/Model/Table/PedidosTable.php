<?php
namespace App\Model\Table;

use App\Model\Entity\Pedido;
use Cake\Database\Driver\Mysql;
use Cake\Database\Type\DateTimeType;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedidos Model
 */
class PedidosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('pedidos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Fornecedores', [
            'foreignKey' => 'fornecedor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Status', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('PedidoItens', [
            'foreignKey' => 'pedido_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('datapedido', 'valid', ['rule' => 'date'])
            ->requirePresence('datapedido', 'create')
            ->notEmpty('datapedido');

        $validator
            ->add('dataentrega', 'valid', ['rule' => 'date'])
            ->allowEmpty('dataentrega');

        $validator
            ->add('dataprevisaoentrega', 'valid', ['rule' => 'date'])
            ->allowEmpty('dataprevisaoentrega');

        $validator->notEmpty('fornecedor_id');
        $validator->notEmpty('status_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['fornecedor_id'], 'Fornecedores'));
        $rules->add($rules->existsIn(['status_id'], 'Status'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        return $rules;
    }


    public function findDate(Query $query, array $opts)
    {
        if ($opts["start"] != null && $opts["end"] != null) {
            $query->where([
                'UNIX_TIMESTAMP(datapedido) BETWEEN ' . $opts["start"]->toUnixString() . ' AND ' . $opts["end"]->toUnixString()
            ]);
        } else if ($opts["start"] != null) {
            $query->where([
                'UNIX_TIMESTAMP(datapedido) >= ' . $opts["start"]->toUnixString()
            ]);
        } else if ($opts["end"] != null) {
            $query->where([
                'UNIX_TIMESTAMP(datapedido) <= ' . $opts["end"]->toUnixString()
            ]);
        }
        return $query;
    }
}
