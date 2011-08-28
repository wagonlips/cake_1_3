<div class="jobs index">
	<h2><?php __('Jobs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('job');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($jobs as $job):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($job['Timecard']['job'], array('controller' => 'timecards', 'action' => 'view', $job['Timecard']['id'])); ?>
		</td>
		<td><?php echo $job['Job']['job']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $job['Job']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $job['Job']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $job['Job']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Timecards', true), array('controller' => 'timecards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timecard', true), array('controller' => 'timecards', 'action' => 'add')); ?> </li>
	</ul>
</div>