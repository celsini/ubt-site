<?php
App::uses('AppController', 'Controller');
/**
 * Facilitadors Controller
 *
 * @property Facilitador $Facilitador
 */
class FacilitadorsController extends AppController {
       var $helpers = array ('Time');
       var $mesesArray = array("01"=>'Enero',"02"=>'Febrero',"03"=>'Marzo',"04"=>'Abril',"05"=>'Mayo',"06"=>'Junio',"07"=>'Julio',"08"=>'Agosto',"09"=>'Septiembre',"10"=>'Octubre',"11"=>'Noviembre',"12"=>'Diciembre');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Facilitador->recursive = 0;
		$this->set('facilitadors', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Facilitador->id = $id;
		if (!$this->Facilitador->exists()) {
			throw new NotFoundException(__('Invalid facilitador'));
		}
		$this->set('facilitador', $this->Facilitador->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Facilitador->create();
			if ($this->Facilitador->save($this->request->data)) {
				$this->Session->setFlash(__('The facilitador has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facilitador could not be saved. Please, try again.'));
			}
		}

                $results = $this->Facilitador->Persona->find('all');
                $options = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));

                $meses = $this->mesesArray;
		$this->set(compact('personas','meses','options'));

	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Facilitador->id = $id;
		if (!$this->Facilitador->exists()) {
			throw new NotFoundException(__('Invalid facilitador'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Facilitador->save($this->request->data)) {
				$this->Session->setFlash(__('The facilitador has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facilitador could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Facilitador->read(null, $id);
		}
                
                $results = $this->Facilitador->Persona->find('all');
                $options = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));

                $meses = $this->mesesArray;
		$this->set(compact('personas','meses','options'));
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
		$this->Facilitador->id = $id;
		if (!$this->Facilitador->exists()) {
			throw new NotFoundException(__('Invalid facilitador'));
		}
		if ($this->Facilitador->delete()) {
			$this->Session->setFlash(__('Facilitador deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Facilitador was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


       public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
