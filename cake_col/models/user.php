<?php
class User extends AppModel {

	var $name = 'User';
	var $validate = array(
		'id' => array('numeric'),
		'username' => array('notempty'),
		'password' => array('notempty'),
		'user_type_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'UserType' => array(
			'className' => 'UserType',
			'foreignKey' => 'user_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasOne = array(
		'Faculty' => array(
			'className' => 'Faculty',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>