<?php
App::uses('EquipoMateria', 'Model');

/**
 * EquipoMateria Test Case
 *
 */
class EquipoMateriaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.equipo_materia', 'app.materia', 'app.pnf', 'app.equipo_estudio', 'app.centroformacion', 'app.localidad', 'app.persona', 'app.coordinador_centro', 'app.facilitador', 'app.equipo_materium', 'app.comision', 'app.calificacion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EquipoMateria = ClassRegistry::init('EquipoMateria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EquipoMateria);

		parent::tearDown();
	}

}
