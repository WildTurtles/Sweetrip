<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GroupsUsers Model
 *
 * @method \App\Model\Entity\GroupsUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\GroupsUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GroupsUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GroupsUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GroupsUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GroupsUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GroupsUser findOrCreate($search, callable $callback = null)
 */
class GroupsUsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('groups_users');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->allowEmpty('id', 'create');

        $validator
                ->requirePresence('user_id', 'create')
                ->notEmpty('usersid');

        $validator
                ->requirePresence('group_id', 'create')
                ->notEmpty('groupsid');

        return $validator;
    }

}
