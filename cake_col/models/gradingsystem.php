<?php
class Gradingsystem extends AppModel {

	var $name = 'Gradingsystem';
	var $validate = array(
		'id' => array('numeric'),
		'name' => array('notempty'),
		'faculty_id' => array('numeric'),
		'quiz' => array('numeric'),
		'prelim' => array('numeric'),
		'midterm' => array('numeric'),
		'prefi' => array('numeric'),
		'final' => array('numeric'),
		'percentage' => array('numeric'),
		'parent_id' => array('numeric')
	);
    
    //The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Faculty' => array(
			'className' => 'Faculty',
			'foreignKey' => 'faculty_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => array('Faculty.id','Faculty.idnumber'),
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