<?php
App::uses('AppController', 'Controller');
/**
 * Materias Controller
 *
 * @property Materia $Materia
 */
class MateriasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Materia->recursive = 0;
		$this->set('materias', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Materia->id = $id;
		if (!$this->Materia->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		$this->set('materia', $this->Materia->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Materia->create();
			if ($this->Materia->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registada con &eacute;xito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Informaci&oacute;n no pudo ser registrada. Por favor intente nuevamente'));
			}
		}
		$pnfs = $this->Materia->Pnf->find('list');
		$this->set(compact('pnfs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Materia->id = $id;
		if (!$this->Materia->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Materia->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registada con &eacute;xito'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Informaci&oacute;n no pudo ser registrada. Por favor intente nuevamente'));
			}
		} else {
			$this->request->data = $this->Materia->read(null, $id);
		}
		$pnfs = $this->Materia->Pnf->find('list');
		$this->set(compact('pnfs'));
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
		$this->Materia->id = $id;
		if (!$this->Materia->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		if ($this->Materia->delete()) {
			$this->Session->setFlash(__('Informaci&oacute;n Eliminada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Información no pudo ser eliminada'));
		$this->redirect(array('action' => 'index'));
	}

    public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
