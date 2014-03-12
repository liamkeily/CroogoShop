<?php
App::uses('TaxCountry', 'CroogoShop.Model');

/**
 * TaxCountry Test Case
 *
 */
class TaxCountryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.croogo_shop.tax_country',
		'plugin.croogo_shop.tax',
		'plugin.croogo_shop.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaxCountry = ClassRegistry::init('CroogoShop.TaxCountry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxCountry);

		parent::tearDown();
	}

}
