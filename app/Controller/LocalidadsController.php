<?php
App::uses('AppController', 'Controller');
/**
 * Localidads Controller
 *
 * @property Localidad $Localidad
 */
class LocalidadsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Localidad->recursive = 0;
		$this->set('localidads', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Localidad->id = $id;
		if (!$this->Localidad->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		$this->set('localidad', $this->Localidad->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Localidad->create();
			if ($this->Localidad->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registada con &eacute;xito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Informaci&oacute;n no pudo ser registrada. Por favor intente nuevamente'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Localidad->id = $id;
		if (!$this->Localidad->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Localidad->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registada con &eacute;xito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Informaci&oacute;n no pudo ser registrada. Por favor intente nuevamente'));
			}
		} else {
			$this->request->data = $this->Localidad->read(null, $id);
		}
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
		$this->Localidad->id = $id;
		if (!$this->Localidad->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		if ($this->Localidad->delete()) {
			$this->Session->setFlash(__('Informaci&oacute;n Elimina'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Informaci&oacute;n no pudo ser elimina'));
		$this->redirect(array('action' => 'index'));
	}


       public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
