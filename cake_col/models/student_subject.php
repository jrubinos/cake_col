<?php
class StudentSubject extends AppModel {

	var $name = 'StudentSubject';
	var $validate = array(
		'id' => array('numeric'),
		'student_id' => array('numeric'),
		'subject_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>