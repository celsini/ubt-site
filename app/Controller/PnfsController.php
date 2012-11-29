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
			throw new NotFoundException(__('Invalid pnf'));
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
				$this->Session->setFlash(__('The pnf has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pnf could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid pnf'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pnf->save($this->request->data)) {
				$this->Session->setFlash(__('The pnf has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pnf could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid pnf'));
		}
		if ($this->Pnf->delete()) {
			$this->Session->setFlash(__('Pnf deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pnf was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
    public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
