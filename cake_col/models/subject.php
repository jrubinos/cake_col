<?php
class Subject extends AppModel {

	var $name = 'Subject';
	var $validate = array(
		'id' => array('numeric'),
		'code' => array('notempty'),
		'name' => array('notempty'),
		'unit_lecture' => array('numeric'),
		'credits' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Precorequisite' => array(
			'className' => 'Precorequisite',
			'foreignKey' => 'subject_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SubjectSection' => array(
			'className' => 'SubjectSection',
			'foreignKey' => 'subject_id',
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
		'Curriculum' => array(
			'className' => 'Curriculum',
			'joinTable' => 'curriculum_subjects',
			'foreignKey' => 'subject_id',
			'associationForeignKey' => 'curriculum_id',
			'unique' => true,
			'conditions' => '',
			'fields' => array('Curriculum.id','Curriculum.name'),
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Student' => array(
			'className' => 'Student',
			'joinTable' => 'student_subjects',
			'foreignKey' => 'subject_id',
			'associationForeignKey' => 'student_id',
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