<?php
App::uses('OrderProduct', 'CroogoShop.Model');

/**
 * OrderProduct Test Case
 *
 */
class OrderProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.order_product',
		'plugin.croogo_shop.variation',
		'plugin.croogo_shop.order',
		'plugin.croogo_shop.product',
		'plugin.croogo_shop.order_product_option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrderProduct = ClassRegistry::init('CroogoShop.OrderProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrderProduct);

		parent::tearDown();
	}

}
