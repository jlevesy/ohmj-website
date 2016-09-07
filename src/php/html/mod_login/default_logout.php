<?php
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<form action="<?php echo JRoute::_(htmlspecialchars(JUri::getInstance()->toString()), true, $params->get('usesecure')); ?>"
      method="post"
      class="navbar-form navbar-right">
  <button type="submit" name="Submit" class="btn btn-primary"><?php echo JText::_('JLOGOUT'); ?></button>
  <input type="hidden" name="option" value="com_users" />
  <input type="hidden" name="task" value="user.logout" />
  <input type="hidden" name="return" value="<?php echo $return; ?>" />
  <?php echo JHtml::_('form.token'); ?>
</form>
