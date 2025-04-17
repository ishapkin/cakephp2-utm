<?php
App::uses('UtmData', 'Model');

/**
 * UtmData Test Case
 */
class UtmDataTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.utm_data'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UtmData = ClassRegistry::init('UtmData');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UtmData);

		parent::tearDown();
	}

}
