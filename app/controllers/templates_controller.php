<?php
class TemplatesController extends AppController {
  var $name = 'Templates';
  var $helpers = Array('Form', 'Tinymce', 'Colorpicker', 'Hello'); 
  var $paginate = array(
    'fields' => array('Template.id', 'Template.title', 'Template.created'),
    'limit' => 5,
    'order' => array(
      'Template.title' => 'asc',
    )
  );
  function index() {
    $templates = $this->paginate('Template');
    $this->set('templates', $templates);
  }
  function view($id = null) {
    $this->Template->id = $id;
    $this->set('template', $this->Template->read());
  }
  function add() {
    if (!empty($this->data)) {
      if ($this->Template->save($this->data)) {
          $this->Session->setFlash('Your template has been saved.');
          $this->redirect(array('action' => 'index'));
      }
    }
  }
  function delete($id) {
    $this->Template->delete($id);
    $this->Session->setFlash('The template with the id: '.$id.' has been deleted.');
    $this->redirect(array('action'=>'index'));
  }
  function edit($id = null) {
    $this->Template->id = $id;
    if (empty($this->data)) {
      $this->data = $this->Template->read();
    } else {
      if ($this->Template->save($this->data)) {
        $this->Session->setFlash('Your template has been updated.');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
}
?>