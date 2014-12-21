<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_email'); ?></th>
			<th><?php echo $this->Paginator->sort('user_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('user_avatar'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_avatar']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['user_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['user_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['user_id']), null, __('Are you sure you want to delete # %s?', $user['User']['user_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trackings'), array('controller' => 'trackings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracking'), array('controller' => 'trackings', 'action' => 'add')); ?> </li>
	</ul>
</div>
