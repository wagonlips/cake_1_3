<?php
  echo $this->Session->flash('auth');
  echo $this->Form->create('Job');
  echo $this->Form->input('job');
  echo $this->Form->end('Save');
?>
