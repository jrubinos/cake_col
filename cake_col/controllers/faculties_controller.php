<?php
class FacultiesController extends AppController {

	var $name = 'Faculties';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Faculty->recursive = 0;
		$this->set('faculties', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Faculty', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('faculty', $this->Faculty->read(null, $id));
	}

	function add($userId) {
		if (!empty($this->data)) {
			$this->Faculty->create();
			if ($this->Faculty->save($this->data)) {
				$this->Session->setFlash(__('The Faculty has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Faculty could not be saved. Please, try again.', true));
			}
		}
		$this->set(compact('userId'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Faculty', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Faculty->save($this->data)) {
				$this->Session->setFlash(__('The Faculty has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Faculty could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Faculty->read(null, $id);
		}
        $users = $this->Faculty->User->find('list');
        $this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Faculty', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Faculty->del($id)) {
			$this->Session->setFlash(__('Faculty deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Faculty could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>