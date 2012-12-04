<?php
App::uses('AppController', 'Controller');
/**
 * Calificacions Controller
 *
 * @property Calificacion $Calificacion
 */
class CalificacionsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
            
                $this->loadModel("Estudiante");
		$this->Estudiante->recursive = -1;
		$this->set('estudiantes', $this->paginate("Estudiante"));
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
                    
                    if (!empty($this->data['Calificacions']['ci']) || !empty($this->data['Calificacions']['eq'])) {
                        if (ctype_digit($this->data['Calificacions']['ci']) && ctype_digit($this->data['Calificacions']['eq'])) {
                            $this->loadModel("Persona");
                            $this->Persona->recursive=-1;
                            $ci = trim($this->data['Calificacions']['ci']);
                            $cii = $this->Persona->find('all',array('fields'=>array("Persona.id"),'conditions'=>array("Persona.co_cedula"=>$ci)));
                            

                            $this->loadModel("EquipoEstudio");
                            $this->EquipoEstudio->recursive=-1;
                            $cod = trim($this->data['Calificacions']['eq']);
                            $codd = $this->EquipoEstudio->find('all',array('fields'=>array("EquipoEstudio.id"),'conditions'=>array("EquipoEstudio.co_equipo_estudio"=>$cod)));                                                
                            

                            if ($codd && $cii) {
                                $id_persona = $cii[0]['Persona']['id'];
                                $cod_eq = $codd[0]['EquipoEstudio']['id'];
                                
                                $this->Session->write('id_persona',$id_persona);
                                $this->Session->write('cod_eq',$cod_eq);
                                $this->redirect(array('action' => 'cargar'));
                            }
                            else {
                                $this->Session->setFlash(__('N&uacute;mero de c&eacute;dula o c&oacute;digo de equipo de estudio inv&aacutelido!'));
                                $this->redirect(array('action' => 'add'));
                            }
                        }
                        else {
                            $this->Session->setFlash(__('N&uacute;mero de c&eacute;dula o c&oacute;digo de equipo de estudio inv&aacutelido!'));
                            $this->redirect(array('action' => 'add'));
                        }
    
                    }
                    else {
                        $this->Session->setFlash(__('Indique n&uacute;mero de c&eacute;dula y c&oacute;digo de equipo de estudio'));
                        $this->redirect(array('action' => 'add'));
                    }

		}
	}

        
/**
 * cargar method
 *
 * @return void
 */
	public function cargar() {
                               
         $this->paginate = array(
           'limit' => 20,
           'order' => array(
               'Nota.id' => 'desc'
           ));
            
            $this->loadModel('Asignatura');
            
            $id_persona = $this->Session->read('id_persona');
            $cod_eq = $this->Session->read('cod_eq');  
            if (!empty($id_persona) && !empty($cod_eq)) {    
                                                
                $this->loadModel("Nota");



                $notas = $this->paginate("Nota");
                
                
		$this->set('notas', $notas);
                
                
                $this->Calificacion->recursive=-1;
                $notas = $this->Calificacion->find('all',array('conditions'=>array("Calificacion.persona_id"=>$id_persona)));                                
                
                $conditionsSubQuery['"Calificacion"."persona_id"'] = $id_persona;
                $db = $this->Asignatura->getDataSource();
                $subQuery = $db->buildStatement(
                    array(
                        'fields'     => array('"Calificacion"."equipo_materia_id"'),
                        'table'      => $db->fullTableName($this->Calificacion),
                        'alias'      => 'Calificacion',
                        'limit'      => null,
                        'offset'     => null,
                        'joins'      => array(),
                        'conditions' => $conditionsSubQuery,
                        'order'      => null,
                        'group'      => null
                    ),
                    $this->User
                );
                $subQuery = ' "Asignatura"."id" NOT IN (' . $subQuery . ') ';
                $subQueryExpression = $db->expression($subQuery);
                $conditions[] = $subQueryExpression;      
                $this->set('materias',$this->Asignatura->find('list', compact('conditions')));
                $this->set('numeros',array(''=>0,20=>20,19=>19,18=>18,17=>17,16=>16,15=>15,14=>14,13=>13,12=>12,11=>11,10=>10,9=>9,8=>8,7=>7,6=>6,5=>5,4=>4,3=>3,2=>2,1=>1));
                                                
                $this->loadModel('Persona');
                $this->Persona->recursive=-1;
                $persona = $this->Persona->read(null,$id_persona);
                $estudiante = "";
                if ($persona) {
                    $this->set('estudiante',$persona['Persona']['tx_nombre1']." ".$persona['Persona']['tx_apellido1']);
                    $this->set('persona_id',$id_persona);
                }
                
                $this->loadModel('EquipoEstudio');
                $this->EquipoEstudio->recursive=-1;
                $eq = $this->EquipoEstudio->read(null,$cod_eq);
                $equipo = "";
                if ($eq) {
                    $this->set('equipo',$eq['EquipoEstudio']['tx_nombre_equipoestudio']);
                }                                
            
		if ($this->request->is('post')) {
                    
 			$this->Calificacion->create();
			if ($this->Calificacion->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registada con &eacute;xito'));                                
				$this->redirect(array('action' => 'cargar'));
			} else {
				$this->Session->setFlash(__('Informaci&oacute;n no pudo ser registrada. Por favor intente nuevamente'));
			}

		}
                
            }
            
            else {               
                $this->redirect(array('action' => 'add'));
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
		$this->Calificacion->id = $id;
		if (!$this->Calificacion->exists()) {
			throw new NotFoundException(__('Identificador no existe verifique!'));
		}
		if ($this->Calificacion->delete()) {
			$this->Session->setFlash(__('Informaci&oacute;n Eliminada'));
			$this->redirect(array('action' => 'cargar'));
		}
		$this->Session->setFlash(__('Informaci&oacute;n no pudo ser eliminada'));
		$this->redirect(array('action' => 'cargar'));
	}
        
    function imprimir() {
        Configure::write('debug',0); // Otherwise we cannot use this method while developing
        $this->layout = 'pdf'; //this will use the pdf.ctp layout

        if ($this->request['pass']) {
            $id = $this->request['pass'];
            $this->loadModel('Estudiante');
            $this->set('estudiante',$this->Estudiante->read(null,$id));            
        }

        $this->render();
    } 
        
        
    public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
