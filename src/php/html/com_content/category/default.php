<?php
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');

$cfg = JFactory::getConfig();
?>
<div class="row featurette">
  <div class="col-md-12 text-center">
    <h1 class="featurette-heading"><?php echo $this->escape($cfg->get('sitename')); ?></h1>
    <p><span class="glyphicon glyphicon-menu-down"></span></p>
    <hr>
</div>
