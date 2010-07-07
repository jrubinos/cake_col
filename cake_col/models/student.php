<?php
class Student extends AppModel {

	var $name = 'Student';
	var $validate = array(
		'id' => array('numeric'),
		'user_id' => array('numeric'),
		'idnumber' => array('notempty'),
		'curriculum_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curriculum' => array(
			'className' => 'Curriculum',
			'foreignKey' => 'curriculum_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'StudentSubject' => array(
			'className' => 'StudentSubject',
			'foreignKey' => 'student_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'SubjectSection' => array(
			'className' => 'SubjectSection',
			'joinTable' => 'subject_section_students',
			'foreignKey' => 'student_id',
			'associationForeignKey' => 'subject_section_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>