<?php
App::uses('Tax', 'CroogoShop.Model');

/**
 * Tax Test Case
 *
 */
class TaxTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.tax',
		'plugin.croogo_shop.tax_country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tax = ClassRegistry::init('CroogoShop.Tax');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tax);

		parent::tearDown();
	}

}
