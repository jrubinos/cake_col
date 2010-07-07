<?php
class CoursesController extends AppController {

	var $name = 'Courses';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Course->recursive = 0;
		$this->set('courses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Course', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('course', $this->Course->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Course->create();
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The Course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Course', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The Course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Course->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Course', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Course->del($id)) {
			$this->Session->setFlash(__('Course deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Course could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>