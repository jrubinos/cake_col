<?php
class StudentsController extends AppController {

	var $name = 'Students';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Student->recursive = 0;
		$this->set('students', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Student', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('student', $this->Student->read(null, $id));
	}

	function add($userId) {
		if (!empty($this->data)) {
            $this->Student->create();
			if ($this->Student->save($this->data)) {
				$this->Session->setFlash(__('The Student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Student could not be saved. Please, try again.', true));
			}
		}
		$param = array(
                'fields' =>array('User.username')                
        );
		$this->set(compact('userId'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Student', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Student->save($this->data)) {
				$this->Session->setFlash(__('The Student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Student could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Student->read(null, $id);
		}
        
        $users = $this->Student->User->find('list');
        
        $param = array(
                'fields' => array('Curriculum.name')
        );
		$curriculums = $this->Student->Curriculum->find('list',$param);
		
        $this->set(compact('users'));
		$this->set(compact('curriculums'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Student', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Student->del($id)) {
			$this->Session->setFlash(__('Student deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Student could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>