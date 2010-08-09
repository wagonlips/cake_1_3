<?php
class Post extends AppModel {
  var $name = 'Post';
  var $validate = array(
    'title' => array(
      'rule' => 'notEmpty'
    ),
    'title' => array(
      'rule' => 'alphaNumeric'
    ),
    'body' => array(
      'rule' => 'notEmpty'
    )
  );
}
?>
