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
			throw new NotFoundException(__('Invalid localidad'));
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
				$this->Session->setFlash(__('The localidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localidad could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid localidad'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Localidad->save($this->request->data)) {
				$this->Session->setFlash(__('The localidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localidad could not be saved. Please, try again.'));
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
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Localidad->id = $id;
		if (!$this->Localidad->exists()) {
			throw new NotFoundException(__('Invalid localidad'));
		}
		if ($this->Localidad->delete()) {
			$this->Session->setFlash(__('Localidad deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Localidad was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


       public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
