<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Products');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Products'), array('action' => 'index'));

?>

<div class="products index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('node_id'); ?></th>
		<th><?php echo $this->Paginator->sort('product_code'); ?></th>
		<th><?php echo $this->Paginator->sort('price'); ?></th>
		<th><?php echo $this->Paginator->sort('variations'); ?></th>
		<th><?php echo $this->Paginator->sort('stock'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Node']['title'], array('controller' => 'nodes', 'action' => 'view', $product['Node']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['product_code']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['variations']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['stock']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $product['Product']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $product['Product']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $product['Product']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
