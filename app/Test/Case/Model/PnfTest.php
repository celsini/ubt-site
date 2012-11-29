<?php
App::uses('Pnf', 'Model');

/**
 * Pnf Test Case
 *
 */
class PnfTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pnf', 'app.equipo_estudio', 'app.centroformacion', 'app.localidad', 'app.persona', 'app.coordinador_centro', 'app.facilitador', 'app.equipo_materium', 'app.comision', 'app.calificacion', 'app.materia', 'app.equipo_materia');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pnf = ClassRegistry::init('Pnf');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pnf);

		parent::tearDown();
	}

}
