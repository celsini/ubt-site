<?php
App::uses('AppModel', 'Model');
/**
 * Materia Model
 *
 * @property Pnf $Pnf
 * @property EquipoMateria $EquipoMateria
 */
class Materia extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tx_unidad_curricular';
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
		'co_materia' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_unidad_curricular' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nu_trayecto' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nu_tramo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nu_uc' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pnf_id' => array(
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
		'Pnf' => array(
			'className' => 'Pnf',
			'foreignKey' => 'pnf_id',
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
		'EquipoMateria' => array(
			'className' => 'EquipoMateria',
			'foreignKey' => 'materias_id',
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
