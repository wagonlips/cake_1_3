<?php
class Template extends AppModel {
  var $name = 'Template';
  var $validate = array(
    'title' => array(
      'notEmpty' => array(
        'rule' => 'notEmpty',
        'message' => 'This field cannot be left blank.',
        'last' => true
      ),
      'onlyLowAlphas' => array(
        'rule' => '/^[a-z]+$/',
        'message' => 'Lower case letters only.'
      )
    ),
    'body' => array(
      'rule' => 'notEmpty'
    )
  );
}
?>
