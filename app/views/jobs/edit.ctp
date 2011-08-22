<!-- File: /app/views/jobs/edit.ctp -->

<h1>Edit Job</h1>
<?php
echo $form->create('Job', array('action' => 'edit'));
echo $form->input('job');
echo $form->input('id', array('type'=>'hidden')); 
echo $form->end('Save Job');
?>
