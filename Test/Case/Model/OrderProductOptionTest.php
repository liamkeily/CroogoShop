<?php
App::uses('OrderProductOption', 'CroogoShop.Model');

/**
 * OrderProductOption Test Case
 *
 */
class OrderProductOptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.order_product_option',
		'plugin.croogo_shop.order_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrderProductOption = ClassRegistry::init('CroogoShop.OrderProductOption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrderProductOption);

		parent::tearDown();
	}

}
