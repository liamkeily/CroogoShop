<?php
App::uses('CakeTime', 'Utility');
App::uses('ClassRegistry', 'Utility');
App::uses('CroogoPlugin', 'Extensions.Lib');
App::uses('DataMigration', 'Extensions.Lib/Utility');
App::uses('File', 'Utility');
App::uses('InstallAppModel', 'Install.Model');
App::uses('Security', 'Utility');

class CroogoShopActivation {

  public function onActivation(&$controller) {
	$this->Acl = $controller->Acl;

	// Setup Types
	$types = array(
		'product'=>array(
			'title'=>'Product',
			'alias'=>'product',
			'plugin'=>'ShopPlugin'
		)
	);
	$this->setupTypes($types);

	// Setup Roles
	$roles = array(
	 'customer'=>'Customer',
	);

	$this->setupRoles($roles);

	// Setup Permissions
	$permissions = array(
	'customer'=>array(
		'allow'=>array(
			'controllers/Meta/Meta',	
		),
		'deny'=>array(

		)
	)
	);
	$this->setupPermissions($permissions);
  }

  public function beforeActivation(&$controller){
	return true;
  }

  public function beforeDeactivation(&$controller){
	return true;
  }

  public function setupTypes($types){
	$this->Type = ClassRegistry::init('Type');
	foreach($types as $typeAlias => $typeParams){
		$type = $this->Type->find('first',array(
		'conditions'=>array(
		'alias'=>$typeAlias
		)
		));	

		if(!isset($type['Type'])){
		$type['Type'] = array();
		}

		$type['Type']['alias'] = $typeAlias;
		foreach($typeParams as $index => $val){
			$type['Type'][$index] = $val;
		}

		$this->Type->create();
		$this->Type->save($type);
	}
  }


  public function setupRoles($roles){
	$this->Role = ClassRegistry::init('Role');
	foreach($roles as $roleAlias => $roleTitle){
		$role = $this->Role->find('first',array(
		'conditions'=>array(
		'alias'=>$roleAlias
		)
		));	

		if(!isset($role['Role'])){
		$role['Role'] = array();
		}

		$role['Role']['alias'] = $roleAlias;
		$role['Role']['title'] = $roleTitle;
		$role['Role']['parent_id'] = 2;
		$this->Role->create();
		$this->Role->save($role);
	}
  }

  public function setupPermissions($permissions_array){
	$this->Role = ClassRegistry::init('Role');
	foreach($permissions_array as $roleAlias => $permissions){
		$role = $this->Role->find('first',array(
			'conditions'=>array(
			'alias'=>$roleAlias
		 )
		));	

		if(isset($role['Role'])){
			$aclRole =& $this->Role;
			$aclRole->create();
			$aclRole->id = $role['Role']['id'];

			foreach($permissions['allow'] as $allowed){
			$this->Acl->allow($aclRole, $allowed);	
			}

			foreach($permissions['deny'] as $allowed){
			$this->Acl->deny($aclRole, $allowed);	
			}
		}
	}
  }
}
