<?php
defined('_JEXEC') or die;
$params = &$this->item->params;
$images = json_decode($this->item->images);
$canEdit = $params->get('access-edit');
$info = $params->get('info_block_position', 0);
?>

<div class="item <?php echo ($this->idx == 0 ? 'active' : ''); ?>">
  <div class="container" style="background-image: url(<?php echo $images->image_intro;?>);">
    <div class="carousel-panel carousel-panel-top carousel-panel-<?php echo (($this->idx % 2) == 0 ? "left" : "right") ?>">
      <h1>
        <?php if($params->get('link_titles') && $params->get('access-view')) : ?>
          <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language))?>">
            <?php echo $this->escape($this->item->title); ?>
          </a>
        <?php else : ?>
          <?php echo $this->escape($this->item->title); ?>
        <?php endif; ?>
      </h1>
      <?php echo $this->item->introtext; ?>
    </div>
  </div>
</div>
