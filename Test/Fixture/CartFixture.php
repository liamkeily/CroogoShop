<?php
/**
 * CartFixture
 *
 */
class CartFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'session' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'product_variation_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'quantity' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'session' => 'Lorem ipsum dolor sit amet',
			'customer_id' => 1,
			'product_id' => 1,
			'product_variation_id' => 1,
			'quantity' => 1
		),
	);

}
