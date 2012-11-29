<?php
App::uses('EquipoMateriaController', 'Controller');

/**
 * TestEquipoMateriaController *
 */
class TestEquipoMateriaController extends EquipoMateriaController {
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
 * EquipoMateriaController Test Case
 *
 */
class EquipoMateriaControllerTestCase extends CakeTestCase {
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
		$this->EquipoMateria = new TestEquipoMateriaController();
		$this->EquipoMateria->constructClasses();
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
