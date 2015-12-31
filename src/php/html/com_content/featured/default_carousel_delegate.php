<?php
defined('_JEXEC') or die;
$params = &$this->item->params;
$canEdit = $params->get('access-edit');
$info = $params->get('info_block_position', 0);
?>
<h1>
  <?php if($params->get('link_titles') && $params->get('access-view')) : ?>
    <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language))?>">
      <?php echo $this->escape($this->item->title); ?>
    </a>
  <?php else : ?>
    <?php echo $this->escape($this->item->title); ?>
  <?php endif; ?>
</h1>
<p>BLAH</p>
