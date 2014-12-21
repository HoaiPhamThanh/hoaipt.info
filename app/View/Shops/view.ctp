<div class="shops view">
<h2><?php  echo __('Shop'); ?></h2>
	<dl>
		<dt><?php echo __('Shop Id'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Name'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shop['User']['user_id'], array('controller' => 'users', 'action' => 'view', $shop['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Decs'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_decs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Price Rank'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_price_rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Time Open'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_time_open']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Avatar'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_avatar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Phone'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Websire'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_websire']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shop'), array('action' => 'edit', $shop['Shop']['shop_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shop'), array('action' => 'delete', $shop['Shop']['shop_id']), null, __('Are you sure you want to delete # %s?', $shop['Shop']['shop_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Addrs'); ?></h3>
	<?php if (!empty($shop['Addr'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Add Id'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __(' District Town'); ?></th>
		<th><?php echo __('Shop Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($shop['Addr'] as $addr): ?>
		<tr>
			<td><?php echo $addr['add_id']; ?></td>
			<td><?php echo $addr['location']; ?></td>
			<td><?php echo $addr['address']; ?></td>
			<td><?php echo $addr['city']; ?></td>
			<td><?php echo $addr[' district_town']; ?></td>
			<td><?php echo $addr['shop_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'addrs', 'action' => 'view', $addr['add_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'addrs', 'action' => 'edit', $addr['add_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'addrs', 'action' => 'delete', $addr['add_id']), null, __('Are you sure you want to delete # %s?', $addr['add_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Addr'), array('controller' => 'addrs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ads'); ?></h3>
	<?php if (!empty($shop['Ad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Ad Id'); ?></th>
		<th><?php echo __('Shop Id'); ?></th>
		<th><?php echo __('Ad Text'); ?></th>
		<th><?php echo __('Ad Type'); ?></th>
		<th><?php echo __('Ad Discount Percent'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($shop['Ad'] as $ad): ?>
		<tr>
			<td><?php echo $ad['ad_id']; ?></td>
			<td><?php echo $ad['shop_id']; ?></td>
			<td><?php echo $ad['ad_text']; ?></td>
			<td><?php echo $ad['ad_type']; ?></td>
			<td><?php echo $ad['ad_discount_percent']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ads', 'action' => 'view', $ad['ad_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ads', 'action' => 'edit', $ad['ad_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ads', 'action' => 'delete', $ad['ad_id']), null, __('Are you sure you want to delete # %s?', $ad['ad_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($shop['Comment'])): ?>
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
		foreach ($shop['Comment'] as $comment): ?>
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
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($shop['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Shop Id'); ?></th>
		<th><?php echo __('Product Name'); ?></th>
		<th><?php echo __('Product Price'); ?></th>
		<th><?php echo __('Product Decs'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($shop['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['product_id']; ?></td>
			<td><?php echo $product['shop_id']; ?></td>
			<td><?php echo $product['product_name']; ?></td>
			<td><?php echo $product['product_price']; ?></td>
			<td><?php echo $product['product_decs']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['product_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['product_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['product_id']), null, __('Are you sure you want to delete # %s?', $product['product_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trackings'); ?></h3>
	<?php if (!empty($shop['Tracking'])): ?>
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
		foreach ($shop['Tracking'] as $tracking): ?>
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
<div class="related">
	<h3><?php echo __('Related Shop Types'); ?></h3>
	<?php if (!empty($shop['ShopType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Shop Type Id'); ?></th>
		<th><?php echo __('Shop Id'); ?></th>
		<th><?php echo __('Shop Type Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($shop['ShopType'] as $shopType): ?>
		<tr>
			<td><?php echo $shopType['shop_type_id']; ?></td>
			<td><?php echo $shopType['shop_id']; ?></td>
			<td><?php echo $shopType['shop_type_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shop_types', 'action' => 'view', $shopType['shop_type_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shop_types', 'action' => 'edit', $shopType['shop_type_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shop_types', 'action' => 'delete', $shopType['shop_type_id']), null, __('Are you sure you want to delete # %s?', $shopType['shop_type_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shop Type'), array('controller' => 'shop_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
