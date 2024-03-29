<?php
/**
 * CoordinadorCentroFixture
 *
 */
class CoordinadorCentroFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'coordinador_centro';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => true),
		'fe_activo' => array('type' => 'date', 'null' => true),
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
			'persona_id' => 1,
			'fe_activo' => '2012-11-28'
		),
	);
}
