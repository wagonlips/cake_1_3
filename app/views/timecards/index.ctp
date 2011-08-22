<!-- File: /app/views/timecards/index.ctp -->

<h1>Timecards</h1>
<p><?php echo $html->link('Add Timecard',array('action' => 'add'));?></p>
<table>

<!-- Here is where we loop through our $timecards array, printing out timecards info -->

<tr> 
  <th><?php echo $paginator->sort('ID', 'Timecard.id'); ?></th> 
  <th><?php echo $paginator->sort('Date', 'Timecard.date'); ?></th> 
  <th><?php echo $paginator->sort('Time In', 'Timecard.time_in'); ?></th> 
  <th><?php echo $paginator->sort('Time Out', 'Timecard.time_out'); ?></th> 
  <th><?php echo $paginator->sort('Job', 'Timecard.job'); ?></th> 
  <th>Actions</th> 
</tr> 
<?php foreach ($timecards as $timecard): ?>
<tr>
  <td> <?php echo $timecard['Timecard']['id']; ?> </td>
  <td> <?php echo $timecard['Timecard']['date']; ?> </td>
  <td><?php echo $timecard['Timecard']['time_in']; ?></td>
  <td><?php echo $timecard['Timecard']['time_out']; ?></td>
  <td><?php echo $timecard['Timecard']['job']; ?></td>
  <td>
    <?php echo $html->link('Delete', array('action' => 'delete', $timecard['Timecard']['id']), null, 'Are you sure?' )?>
    <?php echo "&nbsp;&nbsp;&nbsp;"; ?>
    <?php echo $html->link('Edit', array('action'=>'edit', $timecard['Timecard']['id']));?>
  </td>
</tr>
<?php endforeach; ?>

</table>
<p>Page <?php echo $paginator->numbers(); ?></p>
<p><?php echo $paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?> |
<?php echo $paginator->next('Next »', null, null, array('class' => 'disabled')); ?></p>

