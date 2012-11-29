<?php
App::uses('CoordinadorCentro', 'Model');

/**
 * CoordinadorCentro Test Case
 *
 */
class CoordinadorCentroTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.coordinador_centro', 'app.persona', 'app.localidad', 'app.centroformacion', 'app.equipo_estudio', 'app.facilitador', 'app.equipo_materium', 'app.comision', 'app.calificacion', 'app.materia');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CoordinadorCentro = ClassRegistry::init('CoordinadorCentro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoordinadorCentro);

		parent::tearDown();
	}

}
