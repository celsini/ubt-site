<?php
App::uses('AppController', 'Controller');
/**
 * CoordinadorCentros Controller
 *
 * @property CoordinadorCentro $CoordinadorCentro
 */
class CoordinadorCentrosController extends AppController {
            var $helpers = array ('Time');
            var $mesesArray = array("01"=>'Enero',"02"=>'Febrero',"03"=>'Marzo',"04"=>'Abril',"05"=>'Mayo',"06"=>'Junio',"07"=>'Julio',"08"=>'Agosto',"09"=>'Septiembre',"10"=>'Octubre',"11"=>'Noviembre',"12"=>'Diciembre');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CoordinadorCentro->recursive = 0;
		$this->set('coordinadorCentros', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CoordinadorCentro->id = $id;
		if (!$this->CoordinadorCentro->exists()) {
			throw new NotFoundException(__('Invalid coordinador centro'));
		}
		$this->set('coordinadorCentro', $this->CoordinadorCentro->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CoordinadorCentro->create();
			if ($this->CoordinadorCentro->save($this->request->data)) {
				$this->Session->setFlash(__('The coordinador centro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coordinador centro could not be saved. Please, try again.'));
			}
		}
		//$personas = $this->CoordinadorCentro->Persona->find('list');

                $results = $this->CoordinadorCentro->Persona->find('all');
                $options = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));

                $meses = $this->mesesArray;
		//$this->set(compact('localidads','meses','options'));
		$this->set(compact('personas','meses','options'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CoordinadorCentro->id = $id;
		if (!$this->CoordinadorCentro->exists()) {
			throw new NotFoundException(__('Invalid coordinador centro'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CoordinadorCentro->save($this->request->data)) {
				$this->Session->setFlash(__('The coordinador centro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coordinador centro could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CoordinadorCentro->read(null, $id);
		}
		//$personas = $this->CoordinadorCentro->Persona->find('list');
                $results = $this->CoordinadorCentro->Persona->find('all');
                $options = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));

                $meses = $this->mesesArray;
		//$this->set(compact('localidads','meses','options'));
		$this->set(compact('personas','meses','options'));
		$this->set(compact('personas'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CoordinadorCentro->id = $id;
		if (!$this->CoordinadorCentro->exists()) {
			throw new NotFoundException(__('Invalid coordinador centro'));
		}
		if ($this->CoordinadorCentro->delete()) {
			$this->Session->setFlash(__('Coordinador centro deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Coordinador centro was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

        public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
