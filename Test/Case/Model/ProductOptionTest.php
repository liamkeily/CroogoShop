<?php
App::uses('ProductOption', 'CroogoShop.Model');

/**
 * ProductOption Test Case
 *
 */
class ProductOptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.product_option',
		'plugin.croogo_shop.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductOption = ClassRegistry::init('CroogoShop.ProductOption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductOption);

		parent::tearDown();
	}

}
