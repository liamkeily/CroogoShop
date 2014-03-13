<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Taxes'), h($tax['Tax']['title']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Taxes'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Tax'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Tax'), array('action' => 'edit', $tax['Tax']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Tax'), array('action' => 'delete', $tax['Tax']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $tax['Tax']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Taxes'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Tax'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Tax Countries'), array('controller' => 'tax_countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Tax Country'), array('controller' => 'tax_countries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="taxes view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Alias'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Title'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Percentage'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['percentage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
