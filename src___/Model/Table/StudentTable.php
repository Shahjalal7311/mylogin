<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * User Model
 *
 */
class StudentTable extends Table
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

        $this->table('student');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Batch', [
            'foreignKey' => 'batch_id',
            //'joinType' => 'INNER',
        ]);
        $this->belongsTo('Subject', [
            'foreignKey' => 'subject_id',
           // 'joinType' => 'INNER',
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
            ->allowEmpty('id', 'create');

        $validator
            ->notEmpty('fname', 'First Name is required'); 
        
        $validator
            ->notEmpty('lname', 'Last Name is required');

        $validator
            ->notEmpty('email', 'E-mail is required');
        
        $validator
            ->notEmpty('admission_date', 'E-mail is required');
        
        $validator
            ->allowEmpty('phone');

        $validator
            ->allowEmpty('father_name');
        
        $validator
            ->allowEmpty('mother_name');

        $validator
            ->allowEmpty('address');

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
//        $rules->add($rules->isUnique(['email']));
       return $rules;
    }
    
//        public function validationDefault(Validator $validator)
//    {
//        $validator
//            ->add('fname', 'notEmpty', [
//                'rule' => 'notEmpty',
//                'message' => __('You need to provide a Fast Name'),
//            ])
//            ->add('lname', 'notEmpty', [
//                'rule' => 'notEmpty',
//                'message' => __('You need to provide a Last Name')
//            ])
//             
//            ->add('email', 'notEmpty', [
//                'rule' => 'notEmpty',
//                'message' => __('Email is required'),
//            ])
//                
//            ->add('admission_date', 'notEmpty', [
//                'rule' => 'notEmpty',
//                'message' => __('admission date is required'),
//            ])    
//                ;
//        return $validator;
//    }
}