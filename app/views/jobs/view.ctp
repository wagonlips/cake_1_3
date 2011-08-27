<div class="jobs view">
<h2><?php  __('Job');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Timecards'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($job['Timecards']['id'], array('controller' => 'timecards', 'action' => 'view', $job['Timecards']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Job'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $job['Job']['job']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job', true), array('action' => 'edit', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Job', true), array('action' => 'delete', $job['Job']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Timecards', true), array('controller' => 'timecards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timecards', true), array('controller' => 'timecards', 'action' => 'add')); ?> </li>
	</ul>
</div>
