<?php
App::uses('AppModel', 'Model');
/**
 * EquipoMateria Model
 *
 * @property Materias $Materias
 * @property Facilitador $Facilitador
 * @property EquipoEstudio $EquipoEstudio
 * @property Calificacion $Calificacion
 */
class EquipoMateria extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
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
		'materias_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'facilitador_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fe_cierre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_periodo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_observacion' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'equipo_estudio_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materias_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Facilitador' => array(
			'className' => 'Facilitador',
			'foreignKey' => 'facilitador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EquipoEstudio' => array(
			'className' => 'EquipoEstudio',
			'foreignKey' => 'equipo_estudio_id',
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
		'Calificacion' => array(
			'className' => 'Calificacion',
			'foreignKey' => 'equipo_materia_id',
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
