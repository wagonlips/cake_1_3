<!-- File: /app/views/templates/add.ctp -->  
<h1>Add Template</h1>
<?php
echo $form->create('Template');
echo $form->input('title');
echo $form->input('body', array('rows' => '3'));
echo $hello->sayHello('Snapper');
echo $tinymce->input('content', null, array(
  'theme'                             => 'advanced',
  'theme_advanced_toolbar_location'   => 'top',
  'theme_advanced_toolbar_align'      => 'left',
  'theme_advanced_statusbar_location' => 'bottom',
)); 
/*
echo $form->input('Model.field', array(
  'type' => 'select', 
  'multiple' => 'checkbox',
  'options' => array(
    'Check0' => 'Label 0',
    'Check1' => 'Label 1',
    'Check2' => 'Label 2'
  )
));
*/
echo $form->end('Save Template');
?>