<?php
defined('_JEXEC') or die;
$images = json_decode($item->images);
?>
<div class="item <?php echo ($item_idx == 0 ? 'active' : ''); ?>"
     style="background-image: url(<?php echo $images->image_intro;?>);">
  <div class="container">
    <div class="carousel-panel carousel-panel-top carousel-panel-<?php echo (($item_idx % 2) == 0 ? "left" : "right") ?>">
      <h1>
        <a href="<?php echo '/index.php?option=com_content&view=article&id='.$item->id?>">
          <?php echo $item->title; ?>
        </a>
      </h1>
      <?php echo $item->introtext; ?>
    </div>
  </div>
</div>
