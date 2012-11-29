<?php
App::uses('AppModel', 'Model');
/**
 * Persona Model
 *
 * @property Localidad $Localidad
 * @property CoordinadorCentro $CoordinadorCentro
 * @property Facilitador $Facilitador
 * @property Comision $Comision
 * @property Calificacion $Calificacion
 * @property Centroformacion $Centroformacion
 */
class Persona extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'persona';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'co_cedula';

        //var $actsAs =array('DataCase'=>array('author'=>'upper'));
        var $actsAs =array('DataCase'=>array('author'=>'upper'));
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'co_cedula' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                    'unique' => array(
                        'rule' => 'isUnique',
                        'required' => 'create',
                        'message' => 'Usuario ya existe verifique!'
                        )
		),
		'localidad_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_nacionalidad' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_municipio' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_nombre1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_nombre2' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_apellido1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_apellido2' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fe_nacimiento' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_lugar_nacimiento' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_sexo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_edocivil' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nu_tlffijo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nu_tlfmovil' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_grado_instruccion' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_email' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                       'unique' => array(
                        'rule' => 'isUnique',
                        'required' => 'create',
                        'message' => 'El correo ya existe verifique!'
                        ),
                       'email' => array(
                            'rule'    => array('email', true),
                            'message' => '↓ Ingrese una dirección email valida ↓'
                        )
		),

	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Localidad' => array(
			'className' => 'Localidad',
			'foreignKey' => 'localidad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CoordinadorCentro' => array(
			'className' => 'CoordinadorCentro',
			'foreignKey' => 'persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Facilitador' => array(
			'className' => 'Facilitador',
			'foreignKey' => 'persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Comision' => array(
			'className' => 'Comision',
			'foreignKey' => 'persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Calificacion' => array(
			'className' => 'Calificacion',
			'foreignKey' => 'persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Centroformacion' => array(
			'className' => 'Centroformacion',
			'foreignKey' => 'persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
