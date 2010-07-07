<?php
class Course extends AppModel {

	var $name = 'Course';
	var $validate = array(
		'id' => array('numeric'),
		'code' => array('notempty'),
		'name' => array('notempty'),
		'duration' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Curriculum' => array(
			'className' => 'Curriculum',
			'foreignKey' => 'course_id',
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