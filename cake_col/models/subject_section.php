<?php
class SubjectSection extends AppModel {

	var $name = 'SubjectSection';
	var $validate = array(
		'id' => array('numeric'),
		'name' => array('notempty'),
		'faculty_id' => array('numeric'),
		'subject_id' => array('numeric'),
		'gradingsystem_id' => array('numeric'),
		'parent_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'subject_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'Faculty' => array(
			'className' => 'Faculty',
			'foreignKey' => 'faculty_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'SubjectSectionChild' => array(
			'className' => 'SubjectSection',
			'foreignKey' => 'parent_id',
			'conditions' => 'SubjectSection.parent_id IS NULL',
			'fields' => '',
			'order' => ''
		)
	);

}
?>