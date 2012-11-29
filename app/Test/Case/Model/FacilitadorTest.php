<?php
App::uses('Facilitador', 'Model');

/**
 * Facilitador Test Case
 *
 */
class FacilitadorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.facilitador', 'app.persona', 'app.localidad', 'app.centroformacion', 'app.equipo_estudio', 'app.coordinador_centro', 'app.comision', 'app.calificacion', 'app.equipo_materium');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Facilitador = ClassRegistry::init('Facilitador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Facilitador);

		parent::tearDown();
	}

}
