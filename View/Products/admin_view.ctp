<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Products'), h($product['Product']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Products'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Product'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Product'), array('action' => 'edit', $product['Product']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Product'), array('action' => 'delete', $product['Product']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Products'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Product'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Nodes'), array('controller' => 'nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Node'), array('controller' => 'nodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Product Options'), array('controller' => 'product_options', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Product Option'), array('controller' => 'product_options', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Product Variations'), array('controller' => 'product_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Product Variation'), array('controller' => 'product_variations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="products view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Node'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Node']['title'], array('controller' => 'nodes', 'action' => 'view', $product['Node']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Product Code'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Variations'); ?></dt>
		<dd>
			<?php echo h($product['Product']['variations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Stock'); ?></dt>
		<dd>
			<?php echo h($product['Product']['stock']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
