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

		$this->Vocabulary = ClassRegistry::init('Vocabulary');	

		$taxonomies = array();



		$vocabs = $this->Vocabulary->findAllByPlugin('CroogoShop');

		foreach($vocabs as $vocab){
			$taxonomy['title'] = $vocab['Vocabulary']['title'];	
			$taxonomy['url'] = array(
				'plugin'=>'taxonomy',
				'controller'=>'terms',
				'action'=>'index',
				$vocab['Vocabulary']['id']
			);

			$taxonomies[] = $taxonomy;
		}

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
			'shop.settings' => array(
				'title'=>'Settings',
				'children'=>array(
					'shop.settings.setup'=>array(
						'title'=>'Setup',
						'url'=>array(
						'plugin'=>'croogo_shop',
						'controller'=>'settings',
						'action'=>'index'
						)
					),
					'shop.settings.countries'=>array(
						'title'=>'Countries',
						'url'=>array(
						'plugin'=>'croogo_shop',
						'controller'=>'countries',
						'action'=>'index'
						)
					),
					'shop.settings.taxes'=>array(
						'title'=>'Taxes',
						'url'=>array(
						'plugin'=>'croogo_shop',
						'controller'=>'taxes',
						'action'=>'index'
						)
					),
					'shop.cart' => array(
						'title'=>'View Cart',
						'url'=>array(
						'plugin'=>'croogo_shop',
						'controller'=>'carts',
						'action'=>'index',
						)
					),

				)
			),

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
				'children'=>$taxonomies
			),
			'shop.customers' => array(
				'title'=>'Customers',
				'url'=>array(
				'plugin'=>'croogo_shop',
				'controller'=>'customers',
				'action'=>'index',
				)
			),
			'shop.orders' => array(
				'title'=>'Orders',
				'url'=>array(
				'plugin'=>'croogo_shop',
				'controller'=>'orders',
				'action'=>'index',
				)
			),
		)
		));
	}
}
