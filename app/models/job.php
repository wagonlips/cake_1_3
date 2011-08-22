<?php
class Job extends AppModel {
  var $name = 'Job';
  var $validate = array(
    'body' => array(
      'rule' => 'notEmpty'
    )
  );
}
?>
