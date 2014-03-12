<?php
App::uses('CroogoShopAppModel', 'CroogoShop.Model');
/**
 * OrderProductOption Model
 *
 * @property OrderProduct $OrderProduct
 */
class OrderProductOption extends CroogoShopAppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'OrderProduct' => array(
			'className' => 'OrderProduct',
			'foreignKey' => 'order_product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
