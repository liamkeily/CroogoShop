<?php
App::uses('Product', 'CroogoShop.Model');

/**
 * Product Test Case
 *
 */
class ProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.product',
		'plugin.croogo_shop.node',
		'plugin.croogo_shop.cart',
		'plugin.croogo_shop.product_option',
		'plugin.croogo_shop.product_variation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Product = ClassRegistry::init('CroogoShop.Product');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
