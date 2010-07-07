<?php
class CurriculumSubjectsController extends AppController {

	var $name = 'CurriculumSubjects';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->CurriculumSubject->recursive = 0;
		$this->set('curriculumSubjects', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid CurriculumSubject', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('curriculumSubject', $this->CurriculumSubject->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CurriculumSubject->create();
			if ($this->CurriculumSubject->save($this->data)) {
				$this->Session->setFlash(__('The CurriculumSubject has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The CurriculumSubject could not be saved. Please, try again.', true));
			}
		}
		$curriculums = $this->CurriculumSubject->Curriculum->find('list');
		$this->set(compact('curriculums'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid CurriculumSubject', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CurriculumSubject->save($this->data)) {
				$this->Session->setFlash(__('The CurriculumSubject has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The CurriculumSubject could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CurriculumSubject->read(null, $id);
		}
		$curriculums = $this->CurriculumSubject->Curriculum->find('list');
		$this->set(compact('curriculums'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for CurriculumSubject', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->CurriculumSubject->del($id)) {
			$this->Session->setFlash(__('CurriculumSubject deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The CurriculumSubject could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>