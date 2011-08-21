<!-- File: /app/views/timecards/add.ctp -->  
<h1>Add Timecard</h1>
<?php
echo $form->create('Timecard');
echo $form->input('entry_date');
echo $form->input('entry_time_in');
echo $form->input('entry_time_out');
echo $form->input('entry_job');
echo $form->end('Save Timecard');
?>
