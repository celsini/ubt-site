<?php
App::uses('AppController', 'Controller');
/**
 * Pnfs Controller
 *
 * @property Pnf $Pnf
 */
class PnfsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pnf->recursive = 0;
		$this->set('pnfs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Pnf->id = $id;
		if (!$this->Pnf->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		$this->set('pnf', $this->Pnf->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pnf->create();
			if ($this->Pnf->save($this->request->data)) {
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
		$this->Pnf->id = $id;
		if (!$this->Pnf->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pnf->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registada con &eacute;xito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Informaci&oacute;n no pudo ser registrada. Por favor intente nuevamente'));
			}
		} else {
			$this->request->data = $this->Pnf->read(null, $id);
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
		$this->Pnf->id = $id;
		if (!$this->Pnf->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		if ($this->Pnf->delete()) {
			$this->Session->setFlash(__('Informaci&oacute;n Elimina'));
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
