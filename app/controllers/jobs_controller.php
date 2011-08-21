<?php
class JobsController extends AppController {
  var $name = 'Jobs';
  var $helpers = Array('Form'); 
  var $components = array('Auth','Session');
  var $paginate = array(
    'fields' => array('Job.id', 'Job.job'),
    'limit' => 5,
    'order' => array(
      'Job.date' => 'asc',
    )
  );
  function index() {
    $jobs = $this->paginate('Job');
    $this->set('jobs', $jobs);
  }
  function view($id = null) {
    $this->Job->id = $id;
    $this->set('job', $this->Job->read());
  }
  function add() {
    if (!empty($this->data)) {
      if ($this->Job->save($this->data)) {
          $this->Session->setFlash('Your job has been saved.');
          $this->redirect(array('action' => 'index'));
      }
    }
  }
  function delete($id) {
    $this->Job->delete($id);
    $this->Session->setFlash('The job with the id: '.$id.' has been deleted.');
    $this->redirect(array('action'=>'index'));
  }
  function edit($id = null) {
    $this->Job->id = $id;
    if (empty($this->data)) {
      $this->data = $this->Job->read();
    } else {
      if ($this->Job->save($this->data)) {
        $this->Session->setFlash('Your job has been updated.');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
}
?>
