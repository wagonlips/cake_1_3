<div class="timecards index">
	<h2><?php __('Timecards');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('time_in');?></th>
			<th><?php echo $this->Paginator->sort('time_out');?></th>
			<th><?php echo $this->Paginator->sort('job');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($timecards as $timecard):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $timecard['Timecard']['id']; ?>&nbsp;</td>
		<td><?php echo $timecard['Timecard']['date']; ?>&nbsp;</td>
		<td><?php echo $timecard['Timecard']['time_in']; ?>&nbsp;</td>
		<td><?php echo $timecard['Timecard']['time_out']; ?>&nbsp;</td>
		<td><?php echo $timecard['Timecard']['job']; ?>&nbsp;</td>
		<td><?php echo $timecard['Timecard']['created']; ?>&nbsp;</td>
		<td><?php echo $timecard['Timecard']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $timecard['Timecard']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $timecard['Timecard']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $timecard['Timecard']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $timecard['Timecard']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Timecard', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>