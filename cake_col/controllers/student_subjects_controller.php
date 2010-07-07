<?php
class StudentSubjectsController extends AppController {

	var $name = 'StudentSubjects';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->StudentSubject->recursive = 0;
		$this->set('studentSubjects', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid StudentSubject', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('studentSubject', $this->StudentSubject->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->StudentSubject->create();
			if ($this->StudentSubject->save($this->data)) {
				$this->Session->setFlash(__('The StudentSubject has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The StudentSubject could not be saved. Please, try again.', true));
			}
		}
		$students = $this->StudentSubject->Student->find('list');
		$this->set(compact('students'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid StudentSubject', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->StudentSubject->save($this->data)) {
				$this->Session->setFlash(__('The StudentSubject has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The StudentSubject could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StudentSubject->read(null, $id);
		}
		$students = $this->StudentSubject->Student->find('list');
		$this->set(compact('students'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for StudentSubject', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->StudentSubject->del($id)) {
			$this->Session->setFlash(__('StudentSubject deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The StudentSubject could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>