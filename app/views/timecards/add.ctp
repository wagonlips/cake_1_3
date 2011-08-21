<!-- File: /app/views/timecards/add.ctp -->  
<h1>Add Timecard</h1>
<?php
echo $form->create('Timecard');
echo $form->input('date');
echo $form->input('time_in');
echo $form->input('time_out');
echo $form->input('job');
echo $form->end('Save Timecard');
?>
