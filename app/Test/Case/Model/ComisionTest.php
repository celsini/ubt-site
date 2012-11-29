<?php
App::uses('Comision', 'Model');

/**
 * Comision Test Case
 *
 */
class ComisionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.comision', 'app.persona', 'app.localidad', 'app.centroformacion', 'app.equipo_estudio', 'app.coordinador_centro', 'app.facilitador', 'app.equipo_materium', 'app.calificacion', 'app.personad');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comision = ClassRegistry::init('Comision');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comision);

		parent::tearDown();
	}

}
