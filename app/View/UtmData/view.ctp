<div class="utmData view">
<h2><?php echo __('Utm Data'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($utmData['UtmData']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source'); ?></dt>
		<dd>
			<?php echo h($utmData['UtmData']['source']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medium'); ?></dt>
		<dd>
			<?php echo h($utmData['UtmData']['medium']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campaign'); ?></dt>
		<dd>
			<?php echo h($utmData['UtmData']['campaign']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($utmData['UtmData']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Term'); ?></dt>
		<dd>
			<?php echo h($utmData['UtmData']['term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($utmData['UtmData']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($utmData['UtmData']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Utm Data'), array('action' => 'edit', $utmData['UtmData']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Utm Data'), array('action' => 'delete', $utmData['UtmData']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $utmData['UtmData']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Utm Data'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utm Data'), array('action' => 'add')); ?> </li>
	</ul>
</div>
