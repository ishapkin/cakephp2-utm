<?php
class AddUtmIndexes extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'AddUtmIndexes';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'alter_field' => array(
				'utm_data' => array(
					'source' => array(
						'key' => 'index'
					),
					'medium' => array(
						'key' => 'index'
					),
					'campaign' => array(
						'key' => 'index'
					)
				)
			)
		),
		'down' => array(
			'alter_field' => array(
				'utm_data' => array(
					'source' => array(
						'key' => ''
					),
					'medium' => array(
						'key' => ''
					),
					'campaign' => array(
						'key' => ''
					)
				)
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
		if ($direction === 'up') {
			$db = ConnectionManager::getDataSource('default');
			$db->query("ALTER TABLE `utm_data` ADD INDEX `idx_source_medium` (`source`, `medium`)");
			$db->query("ALTER TABLE `utm_data` ADD INDEX `idx_source_medium_campaign` (`source`, `medium`, `campaign`)");
			$db->query("ALTER TABLE `utm_data` ADD INDEX `idx_full_utm` (`source`, `medium`, `campaign`, `content`, `term`)");
		}
		return true;
	}
}
