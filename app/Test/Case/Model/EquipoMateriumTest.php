<?php
App::uses('EquipoMaterium', 'Model');

/**
 * EquipoMaterium Test Case
 *
 */
class EquipoMateriumTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.equipo_materium', 'app.materia', 'app.facilitador', 'app.persona', 'app.localidad', 'app.centroformacion', 'app.equipo_estudio', 'app.pnf', 'app.materium', 'app.calificacion', 'app.coordinador_centro', 'app.comision');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EquipoMaterium = ClassRegistry::init('EquipoMaterium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EquipoMaterium);

		parent::tearDown();
	}

}
