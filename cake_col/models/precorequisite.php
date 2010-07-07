<?php
class Precorequisite extends AppModel {

	var $name = 'Precorequisite';
	var $validate = array(
		'id' => array('numeric'),
		'type' => array('numeric'),
		'curriculum_subjects_id' => array('numeric'),
		'subject_id' => array('numeric'),
		'year_standing' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'CurriculumSubjects' => array(
			'className' => 'CurriculumSubjects',
			'foreignKey' => 'curriculum_subjects_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'CurriculumSubject' => array(
			'className' => 'CurriculumSubject',
			'foreignKey' => 'precorequisite_id',
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

}
?>