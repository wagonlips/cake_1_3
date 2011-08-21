<!-- File: /app/views/timecards/edit.ctp -->

<h1>Edit Timecard</h1>
<?php
echo $form->create('Timecard', array('action' => 'edit'));
echo $form->input('date');
echo $form->input('time_in');
echo $form->input('time_out');
echo $form->input('job');
echo $form->input('id', array('type'=>'hidden')); 
echo $form->end('Save Timecard');
?>
