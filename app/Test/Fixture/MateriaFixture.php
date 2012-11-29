<?php
/**
 * MateriaFixture
 *
 */
class MateriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'co_materia' => array('type' => 'integer', 'null' => true),
		'tx_unidad_curricular' => array('type' => 'string', 'null' => true, 'length' => 50),
		'nu_trayecto' => array('type' => 'integer', 'null' => true),
		'nu_tramo' => array('type' => 'integer', 'null' => true),
		'nu_uc' => array('type' => 'integer', 'null' => true),
		'pnf_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'co_materia' => 1,
			'tx_unidad_curricular' => 'Lorem ipsum dolor sit amet',
			'nu_trayecto' => 1,
			'nu_tramo' => 1,
			'nu_uc' => 1,
			'pnf_id' => 1
		),
	);
}
