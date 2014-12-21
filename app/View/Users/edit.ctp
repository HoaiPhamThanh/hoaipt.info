<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('user_email');
		echo $this->Form->input('user_phone');
		echo $this->Form->input('user_avatar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.user_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.user_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trackings'), array('controller' => 'trackings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracking'), array('controller' => 'trackings', 'action' => 'add')); ?> </li>
	</ul>
</div>
