<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Orders'), h($order['Order']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Orders'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Order'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Order'), array('action' => 'edit', $order['Order']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Order'), array('action' => 'delete', $order['Order']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Orders'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Order'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Order Products'), array('controller' => 'order_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Order Product'), array('controller' => 'order_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Order Taxes'), array('controller' => 'order_taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Order Tax'), array('controller' => 'order_taxes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="orders view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Subtotal'); ?></dt>
		<dd>
			<?php echo h($order['Order']['subtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Tax'); ?></dt>
		<dd>
			<?php echo h($order['Order']['tax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Total'); ?></dt>
		<dd>
			<?php echo h($order['Order']['total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
