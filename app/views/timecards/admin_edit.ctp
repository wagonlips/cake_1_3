<div class="timecards form">
<?php echo $this->Form->create('Timecard');?>
	<fieldset>
 		<legend><?php __('Admin Edit Timecard'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('time_in');
		echo $this->Form->input('time_out');
		echo $this->Form->input('job');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Timecard.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Timecard.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Timecards', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>