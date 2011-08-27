<?php
class AppController extends Controller {
  var $components = array('Session','Auth');
  /*
  function beforeFilter() {
      $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
      $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'display', 'home');
      $this->Auth->allow('display');
      $this->Auth->authorize = 'controller';
  }
  function isAuthorized() {
      return true;
  }
  public function beforeRender() {
      if (!array_key_exists('requested', $this->params)) {
          $user = $this->Session->read($this->Auth->sessionKey);
          $this->set(compact('user'));
      }
  }
  */
}
?>
