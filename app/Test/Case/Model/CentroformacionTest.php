<?php
App::uses('Centroformacion', 'Model');

/**
 * Centroformacion Test Case
 *
 */
class CentroformacionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.centroformacion', 'app.localidad', 'app.persona', 'app.coordinador_centro', 'app.facilitador', 'app.comision', 'app.calificacion', 'app.equipo_estudio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Centroformacion = ClassRegistry::init('Centroformacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Centroformacion);

		parent::tearDown();
	}

}
