<?php
class GradingsystemsController extends AppController {

	var $name = 'Gradingsystems';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Gradingsystem->recursive = 0;
		$this->set('gradingsystems', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Gradingsystem', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('gradingsystem', $this->Gradingsystem->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Gradingsystem->create();
			if ($this->Gradingsystem->save($this->data)) {
				$this->Session->setFlash(__('The Gradingsystem has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Gradingsystem could not be saved. Please, try again.', true));
			}
		}
        $param = array(
                'fields' =>array('Faculty.idnumber')                
        );
		$faculties = $this->Gradingsystem->Faculty->find('list',$param);
		$this->set(compact('faculties'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Gradingsystem', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Gradingsystem->save($this->data)) {
				$this->Session->setFlash(__('The Gradingsystem has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Gradingsystem could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Gradingsystem->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Gradingsystem', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Gradingsystem->del($id)) {
			$this->Session->setFlash(__('Gradingsystem deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Gradingsystem could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>