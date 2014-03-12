<?php
App::uses('Cart', 'CroogoShop.Model');

/**
 * Cart Test Case
 *
 */
class CartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.cart',
		'plugin.croogo_shop.customer',
		'plugin.croogo_shop.product',
		'plugin.croogo_shop.product_variation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cart = ClassRegistry::init('CroogoShop.Cart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cart);

		parent::tearDown();
	}

}
