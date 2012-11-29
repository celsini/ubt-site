<?php
App::uses('CoordinadorCentrosController', 'Controller');

/**
 * TestCoordinadorCentrosController *
 */
class TestCoordinadorCentrosController extends CoordinadorCentrosController {
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
 * CoordinadorCentrosController Test Case
 *
 */
class CoordinadorCentrosControllerTestCase extends CakeTestCase {
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
		$this->CoordinadorCentros = new TestCoordinadorCentrosController();
		$this->CoordinadorCentros->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoordinadorCentros);

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
