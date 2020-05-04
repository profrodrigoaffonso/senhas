<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TelaMaster Model
 *
 * @property \App\Model\Table\SenhasTable&\Cake\ORM\Association\BelongsTo $Senhas
 * @property \App\Model\Table\GuichesTable&\Cake\ORM\Association\BelongsTo $Guiches
 *
 * @method \App\Model\Entity\TelaMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\TelaMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TelaMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TelaMaster|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TelaMaster saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TelaMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TelaMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TelaMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class TelaMasterTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tela_master');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Senhas', [
            'foreignKey' => 'senha_id',
        ]);
        $this->belongsTo('Guiches', [
            'foreignKey' => 'guiche_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

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
        $rules->add($rules->existsIn(['senha_id'], 'Senhas'));
        $rules->add($rules->existsIn(['guiche_id'], 'Guiches'));

        return $rules;
    }
}
