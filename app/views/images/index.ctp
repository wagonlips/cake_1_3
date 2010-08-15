<?php 
class ImagesController extends AppController {

  var $name = 'Images';

  var $uses = array('Image');

  var $helpers = array(
      'Html',
      'Form',
      'Javascript',
      'Number' // Used to show readable filesizes
      );

  function index() {
    $this->set(
        'images',
        $this->Image->readFolder(APP.WEBROOT_DIR.DS.'uploads')
        );
  }

  function upload() {
    // Upload an image
    if (!empty($this->data)) {
      // Validate and move the file
      if($this->Image->upload($this->data)) {
        $this->Session->setFlash('The image was successfully uploaded.');
      } else {
        $this->Session->setFlash('There was an error with the uploaded file.');
      }

      $this->redirect(
          array(
            'action' => 'index'
            )
          );
    } else {
      $this->redirect(
          array(
            'action' => 'index'
            )
          );
    }
  }
}
?>
