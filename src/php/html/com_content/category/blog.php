<?php
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');
?>

<?php if (empty($this->lead_items) && empty($this->link_items) && empty($this->intro_items)) : ?>
  <p><span class="glyphicon glyphicon-menu-down"></span></p>
  <hr>
  <?php if ($this->params->get('show_no_articles', 1)) : ?>
    <p><?php echo JText::_('COM_CONTENT_NO_ARTICLES'); ?></p>
  <?php endif; ?>
<?php endif; ?>
<?php foreach ($this->lead_items as &$item) : ?>
  <?php
    $this->item = &$item;
    echo $this->loadTemplate('item');
  ?>
<?php endforeach; ?>
