<?php
App::uses('Materium', 'Model');

/**
 * Materium Test Case
 *
 */
class MateriumTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.materium', 'app.pnf', 'app.equipo_estudio', 'app.centroformacion', 'app.localidad', 'app.persona', 'app.coordinador_centro', 'app.facilitador', 'app.equipo_materium', 'app.materia', 'app.calificacion', 'app.comision', 'app.equipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Materium = ClassRegistry::init('Materium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Materium);

		parent::tearDown();
	}

}
