<?php
App::uses('CakeEventListener','Event');

class ShopEventHandler implements CakeEventListener {
	public function implementedEvents() {
		return array(
		'Croogo.setupAdminData' => array(
		'callable' => 'onSetupAdminData',
		),
		);
	}

	public function onSetupAdminData($event){
		CroogoNav::add('shop', array(
		'title' => __d('croogo', 'Shop'),
		'icon' => array('shopping-cart', 'large'),
		'url' => array(
		'admin' => true,
		'plugin' => 'croogo_shop',
		'controller' => 'shop',
		'action' => 'settings',
		),
		'children'=>array(
			'shop.products' => array(
				'title'=>'Products',
			),
			'shop.taxonomys' => array(
				'title'=>'Taxonomys',
			),
			'shop.customers' => array(
				'title'=>'Customers',

			),
			'shop.cart' => array(
				'title'=>'Cart',
			),
			'shop.orders' => array(
				'title'=>'Orders',
			),
			'shop.settings' => array(
				'title'=>'Settings',
			),
		)
		));
	}
}
