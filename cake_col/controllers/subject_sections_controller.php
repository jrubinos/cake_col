<?php
class SubjectSectionsController extends AppController {

	var $name = 'SubjectSections';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SubjectSection->recursive = 0;
		$this->set('subjectSections', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SubjectSection', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subjectSection', $this->SubjectSection->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubjectSection->create();
			if ($this->SubjectSection->save($this->data)) {
				$this->Session->setFlash(__('The SubjectSection has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The SubjectSection could not be saved. Please, try again.', true));
			}
		}
        $param = array(
                'fields' =>array('Subject.code')                
        );
		$subjects = $this->SubjectSection->Subject->find('list',$param);
		$this->set(compact('subjects'));
        
        $param = array(
                'fields' =>array('Faculty.idnumber')                
        );
		$faculties = $this->SubjectSection->Faculty->find('list',$param);
        $this->set(compact('faculties'));
        
		$param = array(
                'fields' =>array('SubjectSectionChild.name')                
        );
		$parents = $this->SubjectSection->SubjectSectionChild->find('list',$param);
		$this->set(compact('parents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SubjectSection', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubjectSection->save($this->data)) {
				$this->Session->setFlash(__('The SubjectSection has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The SubjectSection could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubjectSection->read(null, $id);
		}
		$subjects = $this->SubjectSection->Subject->find('list');
		$this->set(compact('subjects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SubjectSection', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->SubjectSection->del($id)) {
			$this->Session->setFlash(__('SubjectSection deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The SubjectSection could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>