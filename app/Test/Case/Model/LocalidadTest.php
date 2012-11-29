<?php
App::uses('Localidad', 'Model');

/**
 * Localidad Test Case
 *
 */
class LocalidadTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.localidad', 'app.persona', 'app.centroformacion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Localidad = ClassRegistry::init('Localidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Localidad);

		parent::tearDown();
	}

}
