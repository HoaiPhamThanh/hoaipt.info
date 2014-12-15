<div class="shops form">
<?php echo $this->Form->create('Shop'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shop'); ?></legend>
	<?php
		echo $this->Form->input('shop_id');
		echo $this->Form->input('shop_name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('shop_decs');
		echo $this->Form->input('shop_price_rank');
		echo $this->Form->input('shop_time_open');
		echo $this->Form->input('shop_avatar');
		echo $this->Form->input('shop_phone');
		echo $this->Form->input('shop_websire');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Shop.shop_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Shop.shop_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shops'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addrs'), array('controller' => 'addrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Addr'), array('controller' => 'addrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trackings'), array('controller' => 'trackings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracking'), array('controller' => 'trackings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shop Types'), array('controller' => 'shop_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop Type'), array('controller' => 'shop_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
