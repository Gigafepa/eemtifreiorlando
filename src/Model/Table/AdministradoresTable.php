<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administradores Model
 *
 * @method \App\Model\Entity\Administrador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administrador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Administrador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administrador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrador|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administrador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administrador findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AdministradoresTable extends Table
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

        $this->setTable('administradores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->allowEmptyString('nome', false);

        $validator
            ->scalar('login')
            ->maxLength('login', 50)
            ->requirePresence('login', 'create')
            ->allowEmptyString('login', false)
            ->add('login', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'O login deve ser único']);

        $validator
            ->scalar('senha')
            ->maxLength('senha', 255)
            ->requirePresence('senha', 'create')
            ->allowEmptyString('senha', false);

        $validator
            ->scalar('img_src')
            ->maxLength('img_src', 255)
            ->allowEmptyString('img_src');

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->allowEmptyString('status', false);

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
        $rules->add($rules->isUnique(['login']));

        return $rules;
    }
}
