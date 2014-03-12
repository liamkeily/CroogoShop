<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Carts');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Carts'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['Cart']['id'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Carts: ' . $this->data['Cart']['id'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('Cart');

?>
<div class="carts row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Cart'), '#cart');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='cart' class="tab-pane">
			<?php
				echo $this->Form->input('id');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('session', array(
					'label' => 'Session',
				));
				echo $this->Form->input('customer_id', array(
					'label' => 'Customer Id',
				));
				echo $this->Form->input('product_id', array(
					'label' => 'Product Id',
				));
				echo $this->Form->input('product_variation_id', array(
					'label' => 'Product Variation Id',
				));
				echo $this->Form->input('quantity', array(
					'label' => 'Quantity',
				));
			?>
			</div>
			<?php echo $this->Croogo->adminTabs(); ?>
		</div>

	</div>

	<div class="span4">
	<?php
		echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
			$this->Form->button(__d('croogo', 'Apply'), array('name' => 'apply')) .
			$this->Form->button(__d('croogo', 'Save'), array('class' => 'btn btn-primary')) .
			$this->Html->link(__d('croogo', 'Cancel'), array('action' => 'index'), array('class' => 'btn btn-danger')) .
			$this->Html->endBox();
		?>
	</div>

</div>
<?php echo $this->Form->end(); ?>
