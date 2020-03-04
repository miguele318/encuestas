<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersTests Model
 *
 * @property \App\Model\Table\TestsTable&\Cake\ORM\Association\BelongsTo $Tests
 *
 * @method \App\Model\Entity\UsersTest newEmptyEntity()
 * @method \App\Model\Entity\UsersTest newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UsersTest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersTest get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersTest findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UsersTest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersTest[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersTest|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersTest saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersTest[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsersTest[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsersTest[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsersTest[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTestsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users_tests');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tests', [
            'foreignKey' => 'test_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name', 'campo vacio, rellene este campo');

        $validator
            ->requirePresence('url_app', 'create')
                ->notEmpty('url_app', 'campo vacio, rellene este campo')
                ->add('url_app', 'valid-url', [
                        'rule' => 'url',
                        'message' => 'URL No está formateada correctamente'
                    ])
                ->add('url_app','userTest',[
                        'rule'=>  function($url, $context){
                            // normalize URL format
                            if (0 !== strpos($url, 'http://') && 0 !== strpos($url, 'https://')) {
                               $url = "http://{$url}";
                            }
                            // check headers against common 4xx,5xx HTTP codes
                            if($file_headers = get_headers($url)){
                                $codes = [ 
                                    '400','401','402','403','404',
                                    '500','501','502','503','504'
                                ];
                                foreach($codes as $code){
                                    if(true === strpos($file_headers[0], $code)) {
                                        return false;
                                    }
                                }
                                return true; // passes validation
                            }
                            return false;
                        },
                        
                        'message'=>'No podemos llegar al sitio web. vuelva a verificar la URL e intente nuevamente']);
            
        $validator
            ->dateTime('max_date')
            ->requirePresence('max_date', 'create')
            ->notEmptyDateTime('max_date', 'campo vacio, rellene este campo');

        $validator
            ->scalar('message')
            ->maxLength('message', 250)
            ->requirePresence('message', 'create')
            ->notEmptyString('message', ' campo vacio, rellene este campo');

        $validator
            ->scalar('username')
            ->maxLength('username', 50)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');



        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['test_id'], 'Tests'));

        return $rules;
    }
}
