<div class="productDetails index">
	<h2><?php echo __('Product Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('node_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_code'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('variations'); ?></th>
			<th><?php echo $this->Paginator->sort('stock'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productDetails as $productDetail): ?>
	<tr>
		<td><?php echo h($productDetail['ProductDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productDetail['Node']['title'], array('controller' => 'nodes', 'action' => 'view', $productDetail['Node']['id'])); ?>
		</td>
		<td><?php echo h($productDetail['ProductDetail']['product_code']); ?>&nbsp;</td>
		<td><?php echo h($productDetail['ProductDetail']['price']); ?>&nbsp;</td>
		<td><?php echo h($productDetail['ProductDetail']['variations']); ?>&nbsp;</td>
		<td><?php echo h($productDetail['ProductDetail']['stock']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productDetail['ProductDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productDetail['ProductDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productDetail['ProductDetail']['id']), array(), __('Are you sure you want to delete # %s?', $productDetail['ProductDetail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Product Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Nodes'), array('controller' => 'nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Node'), array('controller' => 'nodes', 'action' => 'add')); ?> </li>
	</ul>
</div>
