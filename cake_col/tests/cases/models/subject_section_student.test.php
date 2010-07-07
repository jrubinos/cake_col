<?php 
/* SVN FILE: $Id$ */
/* SubjectSectionStudent Test cases generated on: 2010-07-07 03:40:35 : 1278474035*/
App::import('Model', 'SubjectSectionStudent');

class SubjectSectionStudentTestCase extends CakeTestCase {
	var $SubjectSectionStudent = null;
	var $fixtures = array('app.subject_section_student', 'app.subject_section');

	function startTest() {
		$this->SubjectSectionStudent =& ClassRegistry::init('SubjectSectionStudent');
	}

	function testSubjectSectionStudentInstance() {
		$this->assertTrue(is_a($this->SubjectSectionStudent, 'SubjectSectionStudent'));
	}

	function testSubjectSectionStudentFind() {
		$this->SubjectSectionStudent->recursive = -1;
		$results = $this->SubjectSectionStudent->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('SubjectSectionStudent' => array(
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
		$this->assertEqual($results, $expected);
	}
}
?>