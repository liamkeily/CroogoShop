<?php
App::uses('CroogoShopAppModel', 'CroogoShop.Model');
/**
 * Cart Model
 *
 * @property Customer $Customer
 * @property Product $Product
 * @property ProductVariation $ProductVariation
 */
class Cart extends CroogoShopAppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProductVariation' => array(
			'className' => 'ProductVariation',
			'foreignKey' => 'product_variation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
