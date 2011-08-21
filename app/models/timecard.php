<?php
class Timecard extends AppModel {
  var $name = 'Timecard';
  var $validate = array(
    'body' => array(
      'rule' => 'notEmpty'
    )
  );
}
?>
