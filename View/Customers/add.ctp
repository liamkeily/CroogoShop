<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Customers');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Customers'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['Customer']['id'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Customers: ' . $this->data['Customer']['id'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('Customer');

?>
<div class="customers row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Customer'), '#customer');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='customer' class="tab-pane">
			<?php
				echo $this->Form->input('id');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('firstname', array(
					'label' => 'Firstname',
				));
				echo $this->Form->input('lastname', array(
					'label' => 'Lastname',
				));
				echo $this->Form->input('email', array(
					'label' => 'Email',
				));
				echo $this->Form->input('phone_number', array(
					'label' => 'Phone Number',
				));
				echo $this->Form->input('mobile_number', array(
					'label' => 'Mobile Number',
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
