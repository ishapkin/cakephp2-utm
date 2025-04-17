<?php

class CreateUtmData extends CakeMigration {

	/**
	 * Migration description
	 *
	 * @var string
	 */
	public $description = 'Create UTM data table';

	/**
	 * Actions to be performed
	 *
	 * @var array $migration
	 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'utm_data' => array(
					'id' => array(
						'type' => 'integer',
						'null' => false,
						'default' => null,
						'key' => 'primary'
					),
					'source' => array(
						'type' => 'string',
						'null' => false,
						'length' => 100
					),
					'medium' => array(
						'type' => 'string',
						'null' => false,
						'length' => 100
					),
					'campaign' => array(
						'type' => 'string',
						'null' => false,
						'length' => 100
					),
					'content' => array(
						'type' => 'string',
						'null' => true,
						'default' => null,
						'length' => 100
					),
					'term' => array(
						'type' => 'string',
						'null' => true,
						'default' => null,
						'length' => 100
					),
					'created' => array(
						'type' => 'datetime',
						'null' => true,
						'default' => null
					),
					'modified' => array(
						'type' => 'datetime',
						'null' => true,
						'default' => null
					),
					'indexes' => array(
						'PRIMARY' => array(
							'column' => 'id',
							'unique' => 1
						)
					),
					'tableParameters' => array(
						'charset' => 'utf8',
						'collate' => 'utf8_general_ci',
						'engine' => 'InnoDB'
					)
				)
			)
		),
		'down' => array(
			'drop_table' => array(
				'utm_data'
			)
		)
	);

	/**
	 * Before migration callback
	 *
	 * @param string $direction Direction of migration process (up or down)
	 * @return bool Should process continue
	 */
	public function before($direction) {
		return true;
	}

	/**
	 * After migration callback
	 *
	 * @param string $direction Direction of migration process (up or down)
	 * @return bool Should process continue
	 */
	public function after($direction) {
		return true;
	}
}
