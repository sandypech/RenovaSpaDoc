<?php
App::uses('Sesione', 'Model');

/**
 * Sesione Test Case
 *
 */
class SesioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sesione',
		'app.opinion',
		'app.cliente',
		'app.pais',
		'app.idioma',
		'app.hotel',
		'app.agencia',
		'app.circustancias_medica',
		'app.terapeuta',
		'app.tratamiento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sesione = ClassRegistry::init('Sesione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sesione);

		parent::tearDown();
	}

}
