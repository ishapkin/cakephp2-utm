<?php
App::uses('AppController', 'Controller');
/**
 * Statistics Controller
 */
class StatisticsController extends AppController {

	public $components = array('Paginator');
	public $uses = array('UtmData');

	public function utm_list() {
		$this->Paginator->settings = array(
			'limit' => 20,
			'group' => array('UtmData.source'),
			'order' => array('UtmData.source' => 'asc'),
			'fields' => array('UtmData.source')
		);
		$sources = $this->Paginator->paginate('UtmData');

		$sourceNames = Hash::extract($sources, '{n}.UtmData.source');
		$fullData = $this->UtmData->find('all', array(
			'conditions' => array('UtmData.source' => $sourceNames),
			'order' => array(
				'UtmData.source' => 'asc',
				'UtmData.medium' => 'asc',
				'UtmData.campaign' => 'asc',
				'UtmData.content' => 'asc',
				'UtmData.term' => 'asc'
			)
		));

		$treeData = $this->_buildTree($fullData);
		$this->set('treeData', $treeData);
	}


	protected function _buildTree($flatData) {
		$tree = array();

		foreach ($flatData as $item) {
			$source = $item['UtmData']['source'];
			$medium = $item['UtmData']['medium'];
			$campaign = $item['UtmData']['campaign'];
			$content = $item['UtmData']['content'];
			$term = $item['UtmData']['term'];

			if (!isset($tree[$source])) {
				$tree[$source] = array();
			}

			if (!isset($tree[$source][$medium])) {
				$tree[$source][$medium] = array();
			}

			if (!isset($tree[$source][$medium][$campaign])) {
				$tree[$source][$medium][$campaign] = array();
			}

			if (!isset($tree[$source][$medium][$campaign][$content])) {
				$tree[$source][$medium][$campaign][$content] = array();
			}

			$tree[$source][$medium][$campaign][$content][] = $term;
		}

		return $tree;
	}
}
