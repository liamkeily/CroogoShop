<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal'); ?></dt>
		<dd>
			<?php echo h($order['Order']['subtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo h($order['Order']['tax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($order['Order']['total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Products'), array('controller' => 'order_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Product'), array('controller' => 'order_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Taxes'), array('controller' => 'order_taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Tax'), array('controller' => 'order_taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Order Products'); ?></h3>
	<?php if (!empty($order['OrderProduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Variation Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Unit Price'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Total Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($order['OrderProduct'] as $orderProduct): ?>
		<tr>
			<td><?php echo $orderProduct['id']; ?></td>
			<td><?php echo $orderProduct['variation_id']; ?></td>
			<td><?php echo $orderProduct['order_id']; ?></td>
			<td><?php echo $orderProduct['product_id']; ?></td>
			<td><?php echo $orderProduct['unit_price']; ?></td>
			<td><?php echo $orderProduct['quantity']; ?></td>
			<td><?php echo $orderProduct['total_price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'order_products', 'action' => 'view', $orderProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'order_products', 'action' => 'edit', $orderProduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'order_products', 'action' => 'delete', $orderProduct['id']), null, __('Are you sure you want to delete # %s?', $orderProduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order Product'), array('controller' => 'order_products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Order Taxes'); ?></h3>
	<?php if (!empty($order['OrderTax'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($order['OrderTax'] as $orderTax): ?>
		<tr>
			<td><?php echo $orderTax['id']; ?></td>
			<td><?php echo $orderTax['order_id']; ?></td>
			<td><?php echo $orderTax['tax_id']; ?></td>
			<td><?php echo $orderTax['total']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'order_taxes', 'action' => 'view', $orderTax['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'order_taxes', 'action' => 'edit', $orderTax['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'order_taxes', 'action' => 'delete', $orderTax['id']), null, __('Are you sure you want to delete # %s?', $orderTax['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order Tax'), array('controller' => 'order_taxes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
