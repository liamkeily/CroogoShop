<?php
App::uses('OrderTax', 'CroogoShop.Model');

/**
 * OrderTax Test Case
 *
 */
class OrderTaxTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.order_tax',
		'plugin.croogo_shop.order',
		'plugin.croogo_shop.tax'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrderTax = ClassRegistry::init('CroogoShop.OrderTax');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrderTax);

		parent::tearDown();
	}

}
