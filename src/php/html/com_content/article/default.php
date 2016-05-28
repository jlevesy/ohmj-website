<?php
defined('_JEXEC') or die;
?>
<div class="article">
  <h2 class="text-center">
    <?php echo $this->escape($this->item->title); ?>
  </h2>
  <?php echo $this->item->text; ?>
</div>
