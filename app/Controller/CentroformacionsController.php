<?php
App::uses('AppController', 'Controller');
/**
 * Centroformacions Controller
 *
 * @property Centroformacion $Centroformacion
 */
class CentroformacionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Centroformacion->recursive = 0;
		$this->set('centroformacions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Centroformacion->id = $id;
		if (!$this->Centroformacion->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		$this->set('centroformacion', $this->Centroformacion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Centroformacion->create();
			if ($this->Centroformacion->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registada con &eacute;xito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Informaci&oacute;n no pudo ser registrada. Por favor intente nuevamente'));
			}
		}

                $results = $this->Centroformacion->Localidad->find('all');
                $optionsLocalidad = Set::combine($results, '{n}.Localidad.id', array('{0} -- {1}-- {2}', '{n}.Localidad.tx_estado', '{n}.Localidad.tx_ciudad','{n}.Localidad.tx_sector'));

                $results = $this->Centroformacion->Persona->find('all');
                $optionsPersona = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));

                $this->set(compact('optionsLocalidad','optionsPersona'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Centroformacion->id = $id;
		if (!$this->Centroformacion->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Centroformacion->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registada con &eacute;xito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Informaci&oacute;n no pudo ser registrada. Por favor intente nuevamente'));
			}
		} else {
			$this->request->data = $this->Centroformacion->read(null, $id);
		}
                $results = $this->Centroformacion->Localidad->find('all');
                $optionsLocalidad = Set::combine($results, '{n}.Localidad.id', array('{0} -- {1}-- {2}', '{n}.Localidad.tx_estado', '{n}.Localidad.tx_ciudad','{n}.Localidad.tx_sector'));

                $results = $this->Centroformacion->Persona->find('all');
                $optionsPersona = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));

                $this->set(compact('optionsLocalidad','optionsPersona'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		$this->Centroformacion->id = $id;
		if (!$this->Centroformacion->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		if ($this->Centroformacion->delete()) {
			$this->Session->setFlash(__('Informaci&oacute;n Eliminada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Informaci&oacute;n no pudo ser eliminada'));
		$this->redirect(array('action' => 'index'));
	}

    public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
