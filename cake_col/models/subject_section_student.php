<?php
class SubjectSectionStudent extends AppModel {

	var $name = 'SubjectSectionStudent';
	var $validate = array(
		'id' => array('numeric'),
		'subject_section_id' => array('numeric'),
		'subject_id' => array('numeric'),
		'quiz_grade' => array('numeric'),
		'prelimexam_grade' => array('numeric'),
		'midtermexam_grade' => array('numeric'),
		'prefiexam_grade' => array('numeric'),
		'finalexam_grade' => array('numeric'),
		'final_grade' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'SubjectSection' => array(
			'className' => 'SubjectSection',
			'foreignKey' => 'subject_section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>