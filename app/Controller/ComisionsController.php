<?php
App::uses('AppController', 'Controller');
/**
 * Comisions Controller
 *
 * @property Comision $Comision
 */
class ComisionsController extends AppController {
      var $helpers = array ('Time');
      var $mesesArray = array("01"=>'Enero',"02"=>'Febrero',"03"=>'Marzo',"04"=>'Abril',"05"=>'Mayo',"06"=>'Junio',"07"=>'Julio',"08"=>'Agosto',"09"=>'Septiembre',"10"=>'Octubre',"11"=>'Noviembre',"12"=>'Diciembre');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comision->recursive = 0;
		$this->set('comisions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comision->id = $id;
		if (!$this->Comision->exists()) {
			throw new NotFoundException(__('Invalid comision'));
		}
		$this->set('comision', $this->Comision->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comision->create();
			if ($this->Comision->save($this->request->data)) {
				$this->Session->setFlash(__('The comision has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comision could not be saved. Please, try again.'));
			}
		}

                $results = $this->Comision->Persona->find('all');
                $options = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));

                $meses = $this->mesesArray;
		$this->set(compact('personas','meses','options'));
                
		/*$personas = $this->Comision->Persona->find('list');
		$personads = $this->Comision->Personad->find('list');
		$this->set(compact('personas', 'personads'));*/
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Comision->id = $id;
		if (!$this->Comision->exists()) {
			throw new NotFoundException(__('Invalid comision'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comision->save($this->request->data)) {
				$this->Session->setFlash(__('The comision has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comision could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Comision->read(null, $id);
		}
                $results = $this->Comision->Persona->find('all');
                $options = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));

                $meses = $this->mesesArray;
		$this->set(compact('personas','meses','options'));
                /*
		$personas = $this->Comision->Persona->find('list');
		$personads = $this->Comision->Personad->find('list');
		$this->set(compact('personas', 'personads'));*/
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
		$this->Comision->id = $id;
		if (!$this->Comision->exists()) {
			throw new NotFoundException(__('Invalid comision'));
		}
		if ($this->Comision->delete()) {
			$this->Session->setFlash(__('Comision deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comision was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
     
       public function isAuthorized() {
            return true;
    }
}
