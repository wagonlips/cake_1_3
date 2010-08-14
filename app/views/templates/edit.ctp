<!-- File: /app/views/templates/edit.ctp -->

<h1>Edit Template</h1>
<?php
echo $form->create('Template', array('action' => 'edit'));
echo $form->input('title');
echo $form->input('body', array('rows' => '3'));
echo $form->input('id', array('type'=>'hidden')); 
echo $form->end('Save Template');
?>
