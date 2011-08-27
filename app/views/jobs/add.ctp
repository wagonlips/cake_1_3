<div class="jobs form">
<?php echo $this->Form->create('Job');?>
	<fieldset>
 		<legend><?php __('Add Job'); ?></legend>
	<?php
		echo $this->Form->input('job');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Timecards', true), array('controller' => 'timecards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timecards', true), array('controller' => 'timecards', 'action' => 'add')); ?> </li>
	</ul>
</div>