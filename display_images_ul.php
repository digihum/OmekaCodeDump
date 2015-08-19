		<!-- Files
=================================================== -->
<div class="items-main-image">
<?php $files = $item->getFiles(); ?>
<?php $numberOfFiles = count($files); ?> //just checking number of images attached to an item
<?php $itemImage = files_for_item(array('imageSize' => 'fullsize')); ?>
<?php if($itemImage && $numberOfFiles == 1){ ?>
<?php echo files_for_item(array('imageSize' => 'fullsize')); ?> //if just one image, just output normal div
<?php } elseif ($itemImage && $numberOfFiles > 1){ ?>
<?php echo "<ul>" ?>
<?php $files = $item->getFiles(); ?>
<?php foreach ($files as $file){ ?>
<?php echo "<li><img src='" . file_display_url($file, $format = 'fullsize') . "'></li>"; ?> //if multiple images, output in an unordered list
<?php } ?>
<?php echo "</ul>" ?>
<?php } else { ?>
<?php echo '<p class="noimage">There is no image for this dataset</p>' ?> //if there's no images, output this line of description
<?php } ?>
</div><!-- END -->