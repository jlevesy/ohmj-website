<?php
defined('_JEXEC') or die;
?>
<div class="row featurette">
  <div class="col-xs-12">
    <p class="text-center"><span class="glyphicon glyphicon-menu-down"></span></p>
    <hr>
    <h2 class="text-center">
      <?php echo $this->escape($this->item->title); ?>
    </h2>
    <?php echo $this->item->introtext; ?>
  </div>
</div>
