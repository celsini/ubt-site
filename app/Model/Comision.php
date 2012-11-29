<?php
App::uses('AppModel', 'Model');
/**
 * Comision Model
 *
 * @property Persona $Persona
 * @property Personad $Personad
 */
class Comision extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'comision';
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
		'co_ubt' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'persona_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'persona_idd' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '↓ Campo Obligatorio ↓',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fe_registro' => array(
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
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Personad' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
