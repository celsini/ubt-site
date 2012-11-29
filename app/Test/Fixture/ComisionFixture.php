<?php
/**
 * ComisionFixture
 *
 */
class ComisionFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'comision';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'co_ubt' => array('type' => 'integer', 'null' => true),
		'persona_id' => array('type' => 'integer', 'null' => true),
		'persona_idd' => array('type' => 'integer', 'null' => true),
		'fe_registro' => array('type' => 'date', 'null' => true),
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
			'co_ubt' => 1,
			'persona_id' => 1,
			'persona_idd' => 1,
			'fe_registro' => '2012-11-27'
		),
	);
}
