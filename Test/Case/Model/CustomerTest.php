<?php
App::uses('Customer', 'CroogoShop.Model');

/**
 * Customer Test Case
 *
 */
class CustomerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.customer',
		'plugin.croogo_shop.cart',
		'plugin.croogo_shop.order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Customer = ClassRegistry::init('CroogoShop.Customer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Customer);

		parent::tearDown();
	}

}
