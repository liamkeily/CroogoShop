<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Carts');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Carts'), array('action' => 'index'));

?>

<div class="carts index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('session'); ?></th>
		<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
		<th><?php echo $this->Paginator->sort('product_id'); ?></th>
		<th><?php echo $this->Paginator->sort('product_variation_id'); ?></th>
		<th><?php echo $this->Paginator->sort('quantity'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($carts as $cart): ?>
	<tr>
		<td><?php echo h($cart['Cart']['id']); ?>&nbsp;</td>
		<td><?php echo h($cart['Cart']['session']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cart['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $cart['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cart['Product']['id'], array('controller' => 'products', 'action' => 'view', $cart['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cart['ProductVariation']['id'], array('controller' => 'product_variations', 'action' => 'view', $cart['ProductVariation']['id'])); ?>
		</td>
		<td><?php echo h($cart['Cart']['quantity']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $cart['Cart']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $cart['Cart']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $cart['Cart']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $cart['Cart']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
