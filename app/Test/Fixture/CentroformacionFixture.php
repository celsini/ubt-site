<?php
/**
 * CentroformacionFixture
 *
 */
class CentroformacionFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'centroformacion';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'co_centro_formacion' => array('type' => 'integer', 'null' => true),
		'tx_centroformacion' => array('type' => 'text', 'null' => true),
		'tx_unidadformacion' => array('type' => 'text', 'null' => true),
		'localidad_id' => array('type' => 'integer', 'null' => true),
		'persona_id' => array('type' => 'integer', 'null' => true),
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
			'co_centro_formacion' => 1,
			'tx_centroformacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tx_unidadformacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'localidad_id' => 1,
			'persona_id' => 1
		),
	);
}
