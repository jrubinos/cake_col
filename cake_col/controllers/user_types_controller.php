<?php
class UserTypesController extends AppController {

	var $name = 'UserTypes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->UserType->recursive = 0;
		$this->set('userTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid UserType', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userType', $this->UserType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserType->create();
			if ($this->UserType->save($this->data)) {
				$this->Session->setFlash(__('The UserType has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The UserType could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid UserType', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserType->save($this->data)) {
				$this->Session->setFlash(__('The UserType has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The UserType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for UserType', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->UserType->del($id)) {
			$this->Session->setFlash(__('UserType deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The UserType could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>