<?php

class SeedUtmData extends CakeMigration {

	/**
	 * Migration description
	 *
	 * @var string
	 */
	public $description = 'Seed UTM test data';

	/**
	 * Actions to be performed
	 *
	 * @var array $migration
	 */
	public $migration = array(
		'up' => array(),
		'down' => array()
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
			$UtmData = ClassRegistry::init('UtmData');

			$sources = [
				'google', 'facebook', 'twitter', 'youtube', 'instagram',
				'linkedin', 'pinterest', 'reddit', 'tiktok', 'whatsapp',
				'telegram', 'vkontakte', 'odnoklassniki', 'bing', 'yahoo',
				'duckduckgo', 'baidu', 'yandex', 'mailchimp', 'hubspot',
				'marketplace', 'appstore', 'playmarket', 'snapchat', 'quora',
				'medium', 'wordpress', 'blogger', 'tumblr', 'flickr',
				'github', 'stackoverflow', 'producthunt', 'behance', 'dribbble',
				'slack', 'discord', 'twitch', 'vimeo', 'soundcloud',
				'spotify', 'deezer', 'apple-music', 'amazon', 'ebay',
				'aliexpress', 'walmart', 'target', 'etsy', 'shopify'
			];

			$mediums = ['cpc', 'organic', 'social', 'referral', 'email', 'push', 'sms', 'affiliate'];
			$campaigns = [
				'summer_sale', 'winter_blowout', 'spring_clearance', 'autumn_harvest',
				'black_friday', 'cyber_monday', 'new_year', 'valentines_day',
				'womens_day', 'halloween', 'back_to_school', 'christmas',
				'easter', 'independence_day', 'anniversary', 'product_launch',
				'flash_sale', 'loyalty_reward', 'seasonal_promo', 'clearance'
			];
			$contents = ['banner_728x90', 'sidebar_300x250', 'popup', 'video_ad', 'native_ad', 'text_link', 'email_blast', 'social_post', null];
			$terms = ['buy_now', 'limited_time', 'exclusive', 'free_shipping', '50_off', 'bogo', 'new_arrivals', 'best_sellers', 'trending', null];

			foreach ($sources as $source) {
				$recordsCount = rand(2, 5);
				for ($i = 0; $i < $recordsCount; $i++) {
					$data = array(
						'source' => $source,
						'medium' => $mediums[array_rand($mediums)],
						'campaign' => $campaigns[array_rand($campaigns)],
						'content' => $contents[array_rand($contents)],
						'term' => $terms[array_rand($terms)]
					);

					$UtmData->create();
					$UtmData->save(array('UtmData' => $data), array(
						'validate' => false,
						'callbacks' => false
					));
				}
			}
		} elseif ($direction === 'down') {
			$UtmData = ClassRegistry::init('UtmData');
			$UtmData->deleteAll(array('1 = 1'));
		}

		return true;
	}
}
