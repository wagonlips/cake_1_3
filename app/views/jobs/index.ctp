<!-- File: /app/views/jobs/index.ctp -->

<h1>Jobs</h1>
<p><?php echo $html->link('Add Job',array('action' => 'job'));?></p>
<table>

<!-- Here is where we loop through our $jobs array, printing out jobs info -->

<tr> 
  <th><?php echo $paginator->sort('ID', 'Job.id'); ?></th> 
  <th><?php echo $paginator->sort('Job', 'Job.job'); ?></th> 
  <th>Actions</th> 
</tr> 
<?php foreach ($jobs as $job): ?>
<tr>
  <td> <?php echo $timecard['Job']['id']; ?> </td>
  <td><?php echo $timecard['Job']['job']; ?></td>
  <td>
    <?php echo $html->link('Delete', array('action' => 'delete', $timecard['Job']['id']), null, 'Are you sure?' )?>
    <?php echo "&nbsp;&nbsp;&nbsp;"; ?>
    <?php echo $html->link('Edit', array('action'=>'edit', $timecard['Job']['id']));?>
  </td>
</tr>
<?php endforeach; ?>

</table>
<p>Page <?php echo $paginator->numbers(); ?></p>
<p><?php echo $paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?> |
<?php echo $paginator->next('Next »', null, null, array('class' => 'disabled')); ?></p>

