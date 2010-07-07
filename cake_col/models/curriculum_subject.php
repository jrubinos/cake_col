<?php
class CurriculumSubject extends AppModel {

	var $name = 'CurriculumSubject';
	var $validate = array(
		'id' => array('numeric'),
		'curriculum_id' => array('numeric'),
		'subject_id' => array('numeric'),
		'year_level' => array('numeric'),
		'semester' => array('numeric'),
		'precorequisite_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Curriculum' => array(
			'className' => 'Curriculum',
			'foreignKey' => 'curriculum_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>