<?php
class PostsController extends AppController {
  var $name = 'Posts';
  function index() {
    $this->set('posts', $this->Post->Find('all'));
  }
}
?>
