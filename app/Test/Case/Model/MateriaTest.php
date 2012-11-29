<?php
App::uses('Materia', 'Model');

/**
 * Materia Test Case
 *
 */
class MateriaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.materia', 'app.pnf', 'app.equipo_estudio', 'app.centroformacion', 'app.localidad', 'app.persona', 'app.coordinador_centro', 'app.facilitador', 'app.equipo_materium', 'app.comision', 'app.calificacion', 'app.equipo_materia');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Materia = ClassRegistry::init('Materia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Materia);

		parent::tearDown();
	}

}
