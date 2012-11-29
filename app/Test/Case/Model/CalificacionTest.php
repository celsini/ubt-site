<?php
App::uses('Calificacion', 'Model');

/**
 * Calificacion Test Case
 *
 */
class CalificacionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.calificacion', 'app.equipo_estudio', 'app.materia', 'app.persona', 'app.localidad', 'app.centroformacion', 'app.coordinador_centro', 'app.facilitador', 'app.equipo_materium', 'app.comision');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Calificacion = ClassRegistry::init('Calificacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Calificacion);

		parent::tearDown();
	}

}
