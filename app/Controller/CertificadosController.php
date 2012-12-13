<?php
App::uses('AppController', 'Controller');
/**
 * Certificados Controller
 *
 * @property Certificado $Certificado
 */
class CertificadosController extends AppController {

 

/**
 * certificacion method
 *
 * @return void
 */
    
    
    
	public function certificacion() {
            
           $this->loadModel("Estudiante");
           $this->set('estudiante',$this->Estudiante->find('list'));
           
           $this->loadModel("Certificacion");
           $this->set('estudiantes', $this->paginate("Certificacion"));
           
           
           $ano = date("Y",time());
           
           $correlativo = $this->Certificado->find('count',array('conditions'=>array('Certificado.tx_ano'=>$ano)));
           
           $this->set('correlativo',$correlativo+1);
           
           

           if ($this->request->is('post')) {

                    $this->Certificado->create();
                    if ($this->Certificado->save($this->request->data)) {
                            $this->Session->setFlash(__('Informaci&oacute;n registada con &eacute;xito'));                                
                            $this->redirect(array('action' => 'certificacion'));
                    } else {
                            $this->Session->setFlash(__('Informaci&oacute;n no pudo ser registrada. Por favor intente nuevamente'));
                    }

            }
	}
    
        
    public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }
}
