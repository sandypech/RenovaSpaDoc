<?php
App::uses('Opinione', 'Model');

/**
 * Opinione Test Case
 *
 */
class OpinioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.opinione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Opinione = ClassRegistry::init('Opinione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Opinione);

		parent::tearDown();
	}

}
