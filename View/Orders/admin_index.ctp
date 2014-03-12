<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Orders');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Orders'), array('action' => 'index'));

?>

<div class="orders index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
		<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
		<th><?php echo $this->Paginator->sort('tax'); ?></th>
		<th><?php echo $this->Paginator->sort('total'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['subtotal']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['tax']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['total']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $order['Order']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $order['Order']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $order['Order']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
