<?php
App::uses('AppModel', 'Model');
/**
 * Pnf Model
 *
 * @property EquipoEstudio $EquipoEstudio
 * @property Materia $Materia
 */
class Pnf extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'pnf';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tx_nombre';
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
		'co_pnf' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_nombre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tx_codigointerno_ubt' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'EquipoEstudio' => array(
			'className' => 'EquipoEstudio',
			'foreignKey' => 'pnf_id',
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
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'pnf_id',
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
