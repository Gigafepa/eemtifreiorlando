<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Eletivas Model
 *
 * @property \App\Model\Table\ProfessoresTable|\Cake\ORM\Association\BelongsTo $Professores
 * @property \App\Model\Table\InscricoesTable|\Cake\ORM\Association\HasMany $Inscricoes
 *
 * @method \App\Model\Entity\Eletiva get($primaryKey, $options = [])
 * @method \App\Model\Entity\Eletiva newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Eletiva[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Eletiva|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Eletiva|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Eletiva patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Eletiva[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Eletiva findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EletivasTable extends Table
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

        $this->setTable('eletivas');
        $this->setDisplayField('titulo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Professores', [
            'foreignKey' => 'professor_id'
        ]);
        $this->hasMany('Inscricoes', [
            'foreignKey' => 'eletiva_id'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 50)
            ->requirePresence('titulo', 'create')
            ->allowEmptyString('titulo', false);

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        $validator
            ->requirePresence('vagas', 'create')
            ->allowEmptyString('vagas', false);

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->allowEmptyString('status', false);

        $validator
            ->date('data_eletiva')
            ->requirePresence('data_eletiva', 'create')
            ->allowEmptyDate('data_eletiva', false);

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
        $rules->add($rules->existsIn(['professor_id'], 'Professores'));

        return $rules;
    }
}
