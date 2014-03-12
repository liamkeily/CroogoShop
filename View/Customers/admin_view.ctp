<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Customers'), h($customer['Customer']['id']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Customers'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Customer'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Customer'), array('action' => 'edit', $customer['Customer']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Customers'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Customer'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Cart'), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="customers view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Firstname'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Lastname'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Email'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Phone Number'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Mobile Number'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['mobile_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
