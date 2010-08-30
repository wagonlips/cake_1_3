<!-- File: /app/views/templates/edit.ctp -->

<h1>Edit Template</h1>
<?php
echo $form->create('Template', array('action' => 'edit'));
echo $form->input('title');
echo $tinymce->input('body', null, array(
  'theme'                             => 'advanced',
  'theme_advanced_toolbar_location'   => 'top',
  'theme_advanced_toolbar_align'      => 'left',
  'theme_advanced_statusbar_location' => 'bottom',
)); 
echo $form->input('id', array('type'=>'hidden')); 
echo $form->end('Save Template');
?>
