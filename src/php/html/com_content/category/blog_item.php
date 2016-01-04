<?php
defined('_JEXEC') or die;
$params = $this->item->params;
?>
<div class="row featurette">
  <div class="col-xs-12">
    <div class="text-center">
      <span class="glyphicon glyphicon-menu-down"></span>
    </div>
    <hr>
    <h2 class="text-center">
      <?php echo $this->escape($this->item->title); ?>
    </h2>
    <?php echo $this->item->introtext; ?>

    <?php
      if ($this->item->readmore) :
        $link = JRoute::_(ContentHelperRoute::getArticleRoute(
          $this->item->slug, $this->item->catid, $this->item->language
        ));
        echo JLayoutHelper::render('joomla.content.readmore', array(
          'item'=> $this->item,
          'params' => $params,
          'link' => $link
        ));
      endif;
    ?>
  </div>
</div>
