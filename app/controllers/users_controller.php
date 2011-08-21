<?php
class UsersController extends AppController {
  var $name = 'Users';
  function login() {
  }
  function logout() {
    $this->Session->setFlash('Logout');
    $this->redirect($this->Auth->logout());
  }
}
?>
