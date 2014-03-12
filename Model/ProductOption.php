<?php
App::uses('CroogoShopAppModel', 'CroogoShop.Model');
/**
 * ProductOption Model
 *
 * @property Product $Product
 */
class ProductOption extends CroogoShopAppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
