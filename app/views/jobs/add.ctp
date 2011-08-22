<!-- File: /app/views/jobs/add.ctp -->  
<h1>Add Job</h1>
<?php
echo $form->create('Job');
echo $form->input('job');
echo $form->end('Save Job');
?>
