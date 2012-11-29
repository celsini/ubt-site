<?php
/**
 * CalificacionFixture
 *
 */
class CalificacionFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'calificacion';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'equipo_estudio_id' => array('type' => 'integer', 'null' => true),
		'materia_id' => array('type' => 'integer', 'null' => true),
		'persona_id' => array('type' => 'integer', 'null' => true),
		'nu_calificacion' => array('type' => 'integer', 'null' => true),
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
			'equipo_estudio_id' => 1,
			'materia_id' => 1,
			'persona_id' => 1,
			'nu_calificacion' => 1
		),
	);
}
