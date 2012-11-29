<?php
/**
 * MateriumFixture
 *
 */
class MateriumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'co_materia' => array('type' => 'integer', 'null' => true),
		'tx_unidad_curricular' => array('type' => 'text', 'null' => true),
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
			'tx_unidad_curricular' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'nu_trayecto' => 1,
			'nu_tramo' => 1,
			'nu_uc' => 1,
			'pnf_id' => 1
		),
	);
}
