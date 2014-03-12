<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Customers');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Customers'), array('action' => 'index'));

?>

<div class="customers index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('firstname'); ?></th>
		<th><?php echo $this->Paginator->sort('lastname'); ?></th>
		<th><?php echo $this->Paginator->sort('email'); ?></th>
		<th><?php echo $this->Paginator->sort('phone_number'); ?></th>
		<th><?php echo $this->Paginator->sort('mobile_number'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['phone_number']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['mobile_number']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $customer['Customer']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $customer['Customer']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $customer['Customer']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
