<?php
class PrecorequisitesController extends AppController {

	var $name = 'Precorequisites';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Precorequisite->recursive = 0;
		$this->set('precorequisites', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Precorequisite', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('precorequisite', $this->Precorequisite->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Precorequisite->create();
			if ($this->Precorequisite->save($this->data)) {
				$this->Session->setFlash(__('The Precorequisite has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Precorequisite could not be saved. Please, try again.', true));
			}
		}
		$curriculumSubjects = $this->Precorequisite->CurriculumSubject->find('list');
		$this->set(compact('curriculumSubjects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Precorequisite', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Precorequisite->save($this->data)) {
				$this->Session->setFlash(__('The Precorequisite has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Precorequisite could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Precorequisite->read(null, $id);
		}
		$curriculumSubjects = $this->Precorequisite->CurriculumSubject->find('list');
		$this->set(compact('curriculumSubjects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Precorequisite', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Precorequisite->del($id)) {
			$this->Session->setFlash(__('Precorequisite deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Precorequisite could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>