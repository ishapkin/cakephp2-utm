<div class="utmData form">
<?php echo $this->Form->create('UtmData'); ?>
	<fieldset>
		<legend><?php echo __('Add Utm Data'); ?></legend>
	<?php
		echo $this->Form->input('source');
		echo $this->Form->input('medium');
		echo $this->Form->input('campaign');
		echo $this->Form->input('content');
		echo $this->Form->input('term');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Utm Data'), array('action' => 'index')); ?></li>
	</ul>
</div>
