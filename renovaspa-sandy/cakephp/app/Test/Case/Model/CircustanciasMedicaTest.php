<?php
App::uses('CircustanciasMedica', 'Model');

/**
 * CircustanciasMedica Test Case
 *
 */
class CircustanciasMedicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.circustancias_medica',
		'app.cliente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CircustanciasMedica = ClassRegistry::init('CircustanciasMedica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CircustanciasMedica);

		parent::tearDown();
	}

}
