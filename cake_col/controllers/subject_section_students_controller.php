<?php
class SubjectSectionStudentsController extends AppController {

	var $name = 'SubjectSectionStudents';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SubjectSectionStudent->recursive = 0;
		$this->set('subjectSectionStudents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SubjectSectionStudent', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subjectSectionStudent', $this->SubjectSectionStudent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubjectSectionStudent->create();
			if ($this->SubjectSectionStudent->save($this->data)) {
				$this->Session->setFlash(__('The SubjectSectionStudent has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The SubjectSectionStudent could not be saved. Please, try again.', true));
			}
		}
		$subjectSections = $this->SubjectSectionStudent->SubjectSection->find('list');
		$this->set(compact('subjectSections'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SubjectSectionStudent', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubjectSectionStudent->save($this->data)) {
				$this->Session->setFlash(__('The SubjectSectionStudent has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The SubjectSectionStudent could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubjectSectionStudent->read(null, $id);
		}
		$subjectSections = $this->SubjectSectionStudent->SubjectSection->find('list');
		$this->set(compact('subjectSections'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SubjectSectionStudent', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->SubjectSectionStudent->del($id)) {
			$this->Session->setFlash(__('SubjectSectionStudent deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The SubjectSectionStudent could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>