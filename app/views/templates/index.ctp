<!-- File: /app/views/templates/index.ctp -->

<h1>Templates</h1>
<?php echo $html->link('Add Template',array('action' => 'add'));?>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Actions</th>
<th>Created</th>
</tr>

<!-- Here is where we loop through our $templates array, printing out templates info -->

<tr> 
<th><?php echo $paginator->sort('ID', 'id'); ?></th> 
<th><?php echo $paginator->sort('Title', 'title'); ?></th> 
<th></th>
<th></th>
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
