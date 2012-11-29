<?php
App::uses('AppController', 'Controller');
/**
 * EquipoEstudios Controller
 *
 * @property EquipoEstudio $EquipoEstudio
 */
class EquipoEstudiosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EquipoEstudio->recursive = 0;
		$this->set('equipoEstudios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EquipoEstudio->id = $id;
		if (!$this->EquipoEstudio->exists()) {
			throw new NotFoundException(__('Invalid equipo estudio'));
		}
		$this->set('equipoEstudio', $this->EquipoEstudio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EquipoEstudio->create();
			if ($this->EquipoEstudio->save($this->request->data)) {
				$this->Session->setFlash(__('The equipo estudio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo estudio could not be saved. Please, try again.'));
			}
		}
		$pnfs = $this->EquipoEstudio->Pnf->find('list');
		$centroformacions = $this->EquipoEstudio->Centroformacion->find('list');
		$this->set(compact('pnfs', 'centroformacions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EquipoEstudio->id = $id;
		if (!$this->EquipoEstudio->exists()) {
			throw new NotFoundException(__('Invalid equipo estudio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EquipoEstudio->save($this->request->data)) {
				$this->Session->setFlash(__('The equipo estudio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo estudio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EquipoEstudio->read(null, $id);
		}
		$pnfs = $this->EquipoEstudio->Pnf->find('list');
		$centroformacions = $this->EquipoEstudio->Centroformacion->find('list');
		$this->set(compact('pnfs', 'centroformacions'));
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
		$this->EquipoEstudio->id = $id;
		if (!$this->EquipoEstudio->exists()) {
			throw new NotFoundException(__('Invalid equipo estudio'));
		}
		if ($this->EquipoEstudio->delete()) {
			$this->Session->setFlash(__('Equipo estudio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Equipo estudio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
    public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
