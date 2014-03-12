<?php
App::uses('ProductDetail', 'CroogoShop.Model');

/**
 * ProductDetail Test Case
 *
 */
class ProductDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.product_detail',
		'plugin.croogo_shop.node'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductDetail = ClassRegistry::init('CroogoShop.ProductDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductDetail);

		parent::tearDown();
	}

}
