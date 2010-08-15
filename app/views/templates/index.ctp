<!-- File: /app/views/templates/index.ctp -->

<h1>Templates</h1>
<p><?php echo $html->link('Add Template',array('action' => 'add'));?></p>
<table>

<!-- Here is where we loop through our $templates array, printing out templates info -->

<tr> 
  <th><?php echo $paginator->sort('ID', 'Template.id'); ?></th> 
  <th><?php echo $paginator->sort('Title', 'Template.title'); ?></th> 
  <th>Actions</th> 
  <th><?php echo $paginator->sort('Created', 'Template.created'); ?></th> 
</tr> 
<?php foreach ($templates as $template): ?>
<tr>
  <td>
    <?php echo $template['Template']['id']; ?>
  </td>
  <td>
    <?php echo $html->link($template['Template']['title'], array('action' => 'view', $template['Template']['id'])); ?>
  </td>
  <td>
    <?php echo $html->link('Delete', array('action' => 'delete', $template['Template']['id']), null, 'Are you sure?' )?>
    <?php echo "&nbsp;&nbsp;&nbsp;"; ?>
    <?php echo $html->link('Edit', array('action'=>'edit', $template['Template']['id']));?>
  </td>
  <td><?php echo $template['Template']['created']; ?></td>
</tr>
<?php endforeach; ?>

</table>
<p>Page <?php echo $paginator->numbers(); ?></p>
<p><?php echo $paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?> |
<?php echo $paginator->next('Next »', null, null, array('class' => 'disabled')); ?></p>

