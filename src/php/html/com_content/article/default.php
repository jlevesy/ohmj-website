<?php
defined('_JEXEC') or die;
?>
<div class="article">
  <h2>
    <?php echo $this->escape($this->item->title); ?>
  </h2>
  <div class="meta">
    <p>
      <?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE_ON',
                 JHtml::_('date', $this->item->pulish_up, JText::_('DATE_FORMAT_LC1'))); ?>
    </p>
    <p>
      <?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $this->item->author); ?>
    </p>
  </div>
  <?php echo $this->item->event->beforeDisplayContent; ?>
  <?php echo $this->item->text; ?>
  <?php echo $this->item->event->afterDisplayContent; ?>
</div>
