<?php
App::uses('CroogoShopAppModel', 'CroogoShop.Model');
/**
 * Tax Model
 *
 * @property TaxCountry $TaxCountry
 */
class Tax extends CroogoShopAppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TaxCountry' => array(
			'className' => 'TaxCountry',
			'foreignKey' => 'tax_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
