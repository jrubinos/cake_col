<?php 
/* SVN FILE: $Id$ */
/* Student Test cases generated on: 2010-07-07 03:39:40 : 1278473980*/
App::import('Model', 'Student');

class StudentTestCase extends CakeTestCase {
	var $Student = null;
	var $fixtures = array('app.student', 'app.user', 'app.curriculum', 'app.student_subject');

	function startTest() {
		$this->Student =& ClassRegistry::init('Student');
	}

	function testStudentInstance() {
		$this->assertTrue(is_a($this->Student, 'Student'));
	}

	function testStudentFind() {
		$this->Student->recursive = -1;
		$results = $this->Student->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Student' => array(
			'id' => 1,
			'user_id' => 1,
			'idnumber' => 'Lorem ip',
			'curriculum_id' => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>