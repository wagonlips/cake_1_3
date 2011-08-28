<?php
class TimecardsController extends AppController {

	var $name = 'Timecards';

	function index() {
		$this->Timecard->recursive = 0;
		$this->set('timecards', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid timecard', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('timecard', $this->Timecard->read(null, $id));
	}

        /*
	function add() {
		if (!empty($this->data)) {
			$this->Timecard->create();
			if ($this->Timecard->save($this->data)) {
				$this->Session->setFlash(__('The timecard has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timecard could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid timecard', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Timecard->save($this->data)) {
				$this->Session->setFlash(__('The timecard has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timecard could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Timecard->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for timecard', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Timecard->delete($id)) {
			$this->Session->setFlash(__('Timecard deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Timecard was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
        */
	function admin_index() {
		$this->Timecard->recursive = 0;
		$this->set('timecards', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid timecard', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('timecard', $this->Timecard->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Timecard->create();
			if ($this->Timecard->save($this->data)) {
				$this->Session->setFlash(__('The timecard has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timecard could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid timecard', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Timecard->save($this->data)) {
				$this->Session->setFlash(__('The timecard has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timecard could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Timecard->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for timecard', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Timecard->delete($id)) {
			$this->Session->setFlash(__('Timecard deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Timecard was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
