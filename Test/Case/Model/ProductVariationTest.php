<?php
App::uses('ProductVariation', 'CroogoShop.Model');

/**
 * ProductVariation Test Case
 *
 */
class ProductVariationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.product_variation',
		'plugin.croogo_shop.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductVariation = ClassRegistry::init('CroogoShop.ProductVariation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductVariation);

		parent::tearDown();
	}

}
