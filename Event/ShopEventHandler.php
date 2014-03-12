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
				'url'=>array(
				'plugin'=>'nodes',
				'controller'=>'nodes',
				'action'=>'index',
				'?'=>array(
					'type'=>'product'
				),
				),
				'children'=>array(
					'shop.products.index'=>array(
						'title'=>'List',
						'url'=>array(
						'plugin'=>'nodes',
						'controller'=>'nodes',
						'action'=>'index',
						'?'=>array(
						'type'=>'product',
						)
						),
					),
					'shop.products.add'=>array(
						'title'=>'Add',
						'url'=>array(
						'plugin'=>'nodes',
						'controller'=>'nodes',
						'action'=>'add',
						'product'
						)
					)
				)
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
