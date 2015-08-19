		<!-- Files
=================================================== -->
<div class="items-main-image">
		<?php $files = $item->getFiles(); ?>
		<?php $numberOfFiles = count($files); ?> //just checking
		<?php $itemImage = files_for_item(array('imageSize' => 'fullsize')); ?>
		<?php if($itemImage && $numberOfFiles == 1){ ?>
<?php echo files_for_item(array('imageSize' => 'fullsize')); ?>
		<?php } elseif ($itemImage && $numberOfFiles > 1){ ?>
			<?php echo "<ul>" ?>
			<?php $files = $item->getFiles(); ?>
			<?php foreach ($files as $file){ ?>
			<?php echo "<li><img src='" . file_display_url($file, $format = 'fullsize') . "'></li>"; ?>
			<?php } ?>
			<?php echo "</ul>" ?>
		<?php } else { ?>
		<?php echo '<p class="noimage">There is no image for this dataset</p>' ?>
		<?php } ?>
</div><!-- END -->