<?php 
/* SVN FILE: $Id$ */
/* Student Fixture generated on: 2010-07-07 03:39:38 : 1278473978*/

class StudentFixture extends CakeTestFixture {
	var $name = 'Student';
	var $table = 'students';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'idnumber' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 10),
		'curriculum_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_id' => array('column' => array('user_id', 'idnumber'), 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'user_id' => 1,
		'idnumber' => 'Lorem ip',
		'curriculum_id' => 1
	));
}
?>