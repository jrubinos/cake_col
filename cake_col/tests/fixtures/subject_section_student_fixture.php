<?php 
/* SVN FILE: $Id$ */
/* SubjectSectionStudent Fixture generated on: 2010-07-07 03:40:35 : 1278474035*/

class SubjectSectionStudentFixture extends CakeTestFixture {
	var $name = 'SubjectSectionStudent';
	var $table = 'subject_section_students';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'subject_section_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'subject_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'quiz_grade' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'quiz_rating' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '2,2'),
		'prelimexam_grade' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'prelimexam_rating' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '2,2'),
		'midtermexam_grade' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'midtermexam_rating' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '2,2'),
		'prefiexam_grade' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'prefiexam_rating' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '2,2'),
		'finalexam_grade' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'finalexam_rating' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '2,2'),
		'final_grade' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'final_rating' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '2,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'subject_section_id' => 1,
		'subject_id' => 1,
		'quiz_grade' => 1,
		'quiz_rating' => 1,
		'prelimexam_grade' => 1,
		'prelimexam_rating' => 1,
		'midtermexam_grade' => 1,
		'midtermexam_rating' => 1,
		'prefiexam_grade' => 1,
		'prefiexam_rating' => 1,
		'finalexam_grade' => 1,
		'finalexam_rating' => 1,
		'final_grade' => 1,
		'final_rating' => 1
	));
}
?>