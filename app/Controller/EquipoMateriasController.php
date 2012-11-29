<?php
App::uses('AppController', 'Controller');
/**
 * EquipoMaterias Controller
 *
 * @property EquipoMateria $EquipoMateria
 */
class EquipoMateriasController extends AppController {
        var $helpers = array ('Time');
        var $mesesArray = array("01"=>'Enero',"02"=>'Febrero',"03"=>'Marzo',"04"=>'Abril',"05"=>'Mayo',"06"=>'Junio',"07"=>'Julio',"08"=>'Agosto',"09"=>'Septiembre',"10"=>'Octubre',"11"=>'Noviembre',"12"=>'Diciembre');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EquipoMateria->recursive = 2;
		$this->set('equipoMaterias', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EquipoMateria->id = $id;
		if (!$this->EquipoMateria->exists()) {
			throw new NotFoundException(__('Invalid equipo materia'));
		}
		$this->set('equipoMateria', $this->EquipoMateria->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EquipoMateria->create();
			if ($this->EquipoMateria->save($this->request->data)) {
				$this->Session->setFlash(__('The equipo materia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo materia could not be saved. Please, try again.'));
			}
		}
		$materias = $this->EquipoMateria->Materia->find('list');
                $this->EquipoMateria->EquipoEstudio->recursive=1;
		$equipoEstudios = $this->EquipoMateria->EquipoEstudio->find('list');
                $meses = $this->mesesArray;
                $results = $this->EquipoMateria->Facilitador->Persona->find('all');
                $options = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));
                
		$this->set(compact('materias', 'facilitadors', 'equipoEstudios','meses','options'));
  
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EquipoMateria->id = $id;
		if (!$this->EquipoMateria->exists()) {
			throw new NotFoundException(__('Invalid equipo materia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EquipoMateria->save($this->request->data)) {
				$this->Session->setFlash(__('The equipo materia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo materia could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EquipoMateria->read(null, $id);
		}

                $materias = $this->EquipoMateria->Materia->find('list');
                
		$equipoEstudios = $this->EquipoMateria->EquipoEstudio->find('list');
                $meses = $this->mesesArray;

                $results = $this->EquipoMateria->Facilitador->Persona->find('all');
                $options = Set::combine($results, '{n}.Persona.id', array('{0} -- {1} -- {2}', '{n}.Persona.co_cedula','{n}.Persona.tx_nombre1', '{n}.Persona.tx_apellido1'));

		$this->set(compact('materias', 'facilitadors', 'equipoEstudios','meses','options'));
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
		$this->EquipoMateria->id = $id;
		if (!$this->EquipoMateria->exists()) {
			throw new NotFoundException(__('Invalid equipo materia'));
		}
		if ($this->EquipoMateria->delete()) {
			$this->Session->setFlash(__('Equipo materia deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Equipo materia was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

    public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
