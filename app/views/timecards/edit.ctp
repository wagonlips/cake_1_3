<!-- File: /app/views/timecards/edit.ctp -->

<h1>Edit Timecard</h1>
<?php
echo $form->create('Timecard', array('action' => 'edit'));
echo $form->input('entry_date');
echo $form->input('entry_time_in');
echo $form->input('entry_time_out');
echo $form->input('entry_job');
echo $form->input('id', array('type'=>'hidden')); 
echo $form->end('Save Timecard');
?>
