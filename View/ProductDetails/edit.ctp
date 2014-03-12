<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Product Details');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Product Details'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['ProductDetail']['id'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Product Details: ' . $this->data['ProductDetail']['id'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('ProductDetail');

?>
<div class="productDetails row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Product Detail'), '#product-detail');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='product-detail' class="tab-pane">
			<?php
				echo $this->Form->input('id');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('node_id', array(
					'label' => 'Node Id',
				));
				echo $this->Form->input('product_code', array(
					'label' => 'Product Code',
				));
				echo $this->Form->input('price', array(
					'label' => 'Price',
				));
				echo $this->Form->input('variations', array(
					'label' => 'Variations',
				));
				echo $this->Form->input('stock', array(
					'label' => 'Stock',
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
