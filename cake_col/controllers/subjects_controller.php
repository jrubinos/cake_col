<?php
class SubjectsController extends AppController {

	var $name = 'Subjects';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Subject->recursive = 0;
		$this->set('subjects', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Subject', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subject', $this->Subject->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subject->create();
			if ($this->Subject->save($this->data)) {
				$this->Session->setFlash(__('The Subject has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Subject could not be saved. Please, try again.', true));
			}
		}
		$curriculums = $this->Subject->Curriculum->find('list');
		$students = $this->Subject->Student->find('list');
		$this->set(compact('curriculums', 'students'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Subject', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subject->save($this->data)) {
				$this->Session->setFlash(__('The Subject has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Subject could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subject->read(null, $id);
		}
		$curriculums = $this->Subject->Curriculum->find('list');
		$students = $this->Subject->Student->find('list');
		$this->set(compact('curriculums','students'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Subject', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Subject->del($id)) {
			$this->Session->setFlash(__('Subject deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Subject could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>