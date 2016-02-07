<?php
defined('JPATH_BASE') or die;

$params = $displayData['params'];
$item = $displayData['item'];
$link = $displayData['link'];
?>

<div class="pull-right">
  <a href="<?php echo $link ?>">
    <?php if (!$params->get('access-view')) :
      echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
    elseif ($readmore = $item->alternative_readmore) :
      echo $readmore;
      if ($params->get('show_readmore_title', 0) != 0) :
        echo JHtml::_('string.truncate', ($item->title), $params->get('readmore_limit'));
      endif;
    elseif ($params->get('show_readmore_title', 0) == 0) :
      echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
    else :
      echo JText::_('COM_CONTENT_READ_MORE');
      echo JHtml::_('string.truncate', ($item->title), $params->get('readmore_limit'));
    endif; ?>
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
