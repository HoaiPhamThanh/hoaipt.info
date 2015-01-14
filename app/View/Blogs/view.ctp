<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Avatar'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_avatar']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['user_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['user_id']), null, __('Are you sure you want to delete # %s?', $user['User']['user_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trackings'), array('controller' => 'trackings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracking'), array('controller' => 'trackings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($user['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Shop Id'); ?></th>
		<th><?php echo __('Comment Text'); ?></th>
		<th><?php echo __('Comment Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['comment_id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['shop_id']; ?></td>
			<td><?php echo $comment['comment_text']; ?></td>
			<td><?php echo $comment['comment_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['comment_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['comment_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['comment_id']), null, __('Are you sure you want to delete # %s?', $comment['comment_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Shops'); ?></h3>
	<?php if (!empty($user['Shop'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Shop Id'); ?></th>
		<th><?php echo __('Shop Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Shop Type'); ?></th>
		<th><?php echo __('Shop Decs'); ?></th>
		<th><?php echo __('Shop Price Rank'); ?></th>
		<th><?php echo __('Shop Time Open'); ?></th>
		<th><?php echo __('Shop Avatar'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Shop'] as $shop): ?>
		<tr>
			<td><?php echo $shop['shop_id']; ?></td>
			<td><?php echo $shop['shop_name']; ?></td>
			<td><?php echo $shop['user_id']; ?></td>
			<td><?php echo $shop['shop_type']; ?></td>
			<td><?php echo $shop['shop_decs']; ?></td>
			<td><?php echo $shop['shop_price_rank']; ?></td>
			<td><?php echo $shop['shop_time_open']; ?></td>
			<td><?php echo $shop['shop_avatar']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shops', 'action' => 'view', $shop['shop_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shops', 'action' => 'edit', $shop['shop_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shops', 'action' => 'delete', $shop['shop_id']), null, __('Are you sure you want to delete # %s?', $shop['shop_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trackings'); ?></h3>
	<?php if (!empty($user['Tracking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Tracking Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Shop Id'); ?></th>
		<th><?php echo __('Tracking Type'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Tracking'] as $tracking): ?>
		<tr>
			<td><?php echo $tracking['tracking_id']; ?></td>
			<td><?php echo $tracking['user_id']; ?></td>
			<td><?php echo $tracking['shop_id']; ?></td>
			<td><?php echo $tracking['tracking_type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trackings', 'action' => 'view', $tracking['tracking_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trackings', 'action' => 'edit', $tracking['tracking_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trackings', 'action' => 'delete', $tracking['tracking_id']), null, __('Are you sure you want to delete # %s?', $tracking['tracking_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tracking'), array('controller' => 'trackings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
