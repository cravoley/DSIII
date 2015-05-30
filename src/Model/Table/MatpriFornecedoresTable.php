<?php
namespace App\Model\Table;

use App\Model\Entity\MatpriFornecedore;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MatpriFornecedores Model
 */
class MatpriFornecedoresTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('matpri_fornecedores');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Fornecedores', [
            'foreignKey' => 'fornecedor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MateriasPrimas', [
            'foreignKey' => 'materia_prima_id',
            'joinType' => 'INNER'
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
            ->add('preco', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('preco');
            
        $validator
            ->add('diasprazo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('diasprazo');

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
        $rules->add($rules->existsIn(['materia_prima_id'], 'MateriasPrimas'));
        return $rules;
    }
}
