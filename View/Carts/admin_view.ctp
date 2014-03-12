<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Carts'), h($cart['Cart']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Carts'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Cart'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Cart'), array('action' => 'edit', $cart['Cart']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Cart'), array('action' => 'delete', $cart['Cart']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $cart['Cart']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Carts'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Cart'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Product Variations'), array('controller' => 'product_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Product Variation'), array('controller' => 'product_variations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="carts view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Session'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['session']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cart['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $cart['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cart['Product']['id'], array('controller' => 'products', 'action' => 'view', $cart['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Product Variation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cart['ProductVariation']['id'], array('controller' => 'product_variations', 'action' => 'view', $cart['ProductVariation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Quantity'); ?></dt>
		<dd>
			<?php echo h($cart['Cart']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
