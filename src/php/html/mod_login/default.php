<?php
defined('_JEXEC') or die;
require_once JPATH_SITE . '/components/com_users/helpers/route.php';
JHtml::_('behavior.keepalive');
JHtml::_('bootstrap.tooltip');
?>
<form class="navbar-form navbar-right login-form"
      method="post"
      action="<?php echo JRoute::_(htmlspecialchars(JUri::getInstance()->toString()), true, $params->get('usesecure')); ?>">
  <div class="form-group">
    <input id="modlgn-username" type="text" name="username" class="form-control" tabindex="0" size="18" placeholder="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>" />
  </div>
  <div class="form-group">
    <input id="modlgn-passwd" type="password" name="password" class="form-control" tabindex="0" size="18" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" />
  </div>
  <input type="hidden" name="option" value="com_users" />
  <input type="hidden" name="task" value="user.login" />
  <input type="hidden" name="return" value="<?php echo $return; ?>" />
  <?php echo JHtml::_('form.token'); ?>
  <button type="submit" class="btn btn-primary"><?php echo JText::_('JLOGIN') ?></button>
</form>
