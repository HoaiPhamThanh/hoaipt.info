<div class="shops index">
	<h2><?php echo __('Shops'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('shop_id'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_decs'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_price_rank'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_time_open'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_avatar'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_websire'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($shops as $shop): ?>
	<tr>
		<td><?php echo h($shop['Shop']['shop_id']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['shop_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($shop['User']['user_id'], array('controller' => 'users', 'action' => 'view', $shop['User']['user_id'])); ?>
		</td>
		<td><?php echo h($shop['Shop']['shop_decs']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['shop_price_rank']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['shop_time_open']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['shop_avatar']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['shop_phone']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['shop_websire']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $shop['Shop']['shop_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $shop['Shop']['shop_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $shop['Shop']['shop_id']), null, __('Are you sure you want to delete # %s?', $shop['Shop']['shop_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Shop'), array('action' => 'add')); ?></li>
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
