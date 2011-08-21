<?php
class TimecardsController extends AppController {
  var $name = 'Timecards';
  var $helpers = Array('Form'); 
  var $components = array('Auth','Session');
  var $paginate = array(
    'fields' => array('Timecard.id', 'Timecard.date', 'Timecard.created', 'Timecard.time_in', 'time_out', 'job'),
    'limit' => 5,
    'order' => array(
      'Timecard.date' => 'asc',
    )
  );
  function index() {
    $timecards = $this->paginate('Timecard');
    $this->set('timecards', $timecards);
  }
  function view($id = null) {
    $this->Timecard->id = $id;
    $this->set('timecard', $this->Timecard->read());
  }
  function add() {
    if (!empty($this->data)) {
      if ($this->Timecard->save($this->data)) {
          $this->Session->setFlash('Your timecard has been saved.');
          $this->redirect(array('action' => 'index'));
      }
    }
  }
  function job() {
    if (!empty($this->data)) {
      if ($this->Timecard->save($this->data)) {
          $this->Session->setFlash('The new job has been saved.');
          $this->redirect(array('action' => 'index'));
      }
    }
  }
  function delete($id) {
    $this->Timecard->delete($id);
    $this->Session->setFlash('The timecard with the id: '.$id.' has been deleted.');
    $this->redirect(array('action'=>'index'));
  }
  function edit($id = null) {
    $this->Timecard->id = $id;
    if (empty($this->data)) {
      $this->data = $this->Timecard->read();
    } else {
      if ($this->Timecard->save($this->data)) {
        $this->Session->setFlash('Your timecard has been updated.');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
}
?>
