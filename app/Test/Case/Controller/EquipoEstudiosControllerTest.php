<?php
App::uses('EquipoEstudiosController', 'Controller');

/**
 * TestEquipoEstudiosController *
 */
class TestEquipoEstudiosController extends EquipoEstudiosController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * EquipoEstudiosController Test Case
 *
 */
class EquipoEstudiosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.equipo_estudio', 'app.pnf', 'app.materium', 'app.equipo_materium', 'app.materia', 'app.equipo_materia', 'app.facilitador', 'app.persona', 'app.localidad', 'app.centroformacion', 'app.coordinador_centro', 'app.comision', 'app.calificacion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EquipoEstudios = new TestEquipoEstudiosController();
		$this->EquipoEstudios->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EquipoEstudios);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
