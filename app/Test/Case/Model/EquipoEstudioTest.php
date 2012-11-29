<?php
App::uses('EquipoEstudio', 'Model');

/**
 * EquipoEstudio Test Case
 *
 */
class EquipoEstudioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.equipo_estudio', 'app.pnf', 'app.materium', 'app.equipo_materium', 'app.materia', 'app.facilitador', 'app.persona', 'app.localidad', 'app.centroformacion', 'app.coordinador_centro', 'app.comision', 'app.calificacion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EquipoEstudio = ClassRegistry::init('EquipoEstudio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EquipoEstudio);

		parent::tearDown();
	}

}
