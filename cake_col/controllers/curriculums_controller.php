<?php
class CurriculumsController extends AppController {

	var $name = 'Curriculums';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Curriculum->recursive = 0;
		$this->set('curriculums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Curriculum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('curriculum', $this->Curriculum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Curriculum->create();
			if ($this->Curriculum->save($this->data)) {
				$this->Session->setFlash(__('The Curriculum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Curriculum could not be saved. Please, try again.', true));
			}
		}
		$courses = $this->Curriculum->Course->find('list');
		$this->set(compact('courses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Curriculum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Curriculum->save($this->data)) {
				$this->Session->setFlash(__('The Curriculum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Curriculum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Curriculum->read(null, $id);
		}
		$courses = $this->Curriculum->Course->find('list');
		$this->set(compact('courses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Curriculum', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Curriculum->del($id)) {
			$this->Session->setFlash(__('Curriculum deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Curriculum could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>