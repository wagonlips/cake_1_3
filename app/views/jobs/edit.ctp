<div class="jobs form">
<?php echo $this->Form->create('Job');?>
	<fieldset>
 		<legend><?php __('Edit Job'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('job');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Job.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Job.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Timecards', true), array('controller' => 'timecards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timecards', true), array('controller' => 'timecards', 'action' => 'add')); ?> </li>
	</ul>
</div>