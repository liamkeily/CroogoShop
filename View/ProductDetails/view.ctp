<div class="productDetails view">
<h2><?php echo __('Product Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Node'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productDetail['Node']['title'], array('controller' => 'nodes', 'action' => 'view', $productDetail['Node']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Code'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['product_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variations'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['variations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['stock']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Detail'), array('action' => 'edit', $productDetail['ProductDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Detail'), array('action' => 'delete', $productDetail['ProductDetail']['id']), null, __('Are you sure you want to delete # %s?', $productDetail['ProductDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nodes'), array('controller' => 'nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Node'), array('controller' => 'nodes', 'action' => 'add')); ?> </li>
	</ul>
</div>
