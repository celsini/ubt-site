<?php
/**
 * EquipoMateriaFixture
 *
 */
class EquipoMateriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'materias_id' => array('type' => 'integer', 'null' => true),
		'facilitador_id' => array('type' => 'integer', 'null' => true),
		'fe_cierre' => array('type' => 'date', 'null' => true),
		'tx_periodo' => array('type' => 'string', 'null' => true, 'length' => 30),
		'tx_observacion' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'equipo_estudio_id' => array('type' => 'integer', 'null' => true),
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
			'materias_id' => 1,
			'facilitador_id' => 1,
			'fe_cierre' => '2012-11-28',
			'tx_periodo' => 'Lorem ipsum dolor sit amet',
			'tx_observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'equipo_estudio_id' => 1
		),
	);
}
