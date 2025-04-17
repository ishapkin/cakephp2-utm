<div class="utm-tree">
	<?php foreach ($treeData as $source => $mediums): ?>
		<div class="source">
			<?php echo h($source); ?><br>

			<?php foreach ($mediums as $medium => $campaigns): ?>
				....<?php echo h($medium); ?><br>

				<?php foreach ($campaigns as $campaign => $contents): ?>
					........<?php echo h($campaign); ?><br>

					<?php foreach ($contents as $content => $terms): ?>
						............<?php echo ($content === 'NULL' ? 'NULL' : h($content)); ?><br>

						<?php foreach ($terms as $term): ?>
							................<?php echo ($term === 'NULL' ? 'NULL' : h($term)); ?><br>
						<?php endforeach; ?>
					<?php endforeach; ?>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</div>
	<?php endforeach; ?>
</div>

<div class="pagination">
	<?php
	echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled'));
	echo ' | ';
	echo $this->Paginator->numbers();
	echo ' | ';
	echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled'));
	?>
</div>
