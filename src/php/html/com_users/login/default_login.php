<?php
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
?>

<div class="login<?php echo $this->pageclass_sfx?>">
  <form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>"
        method="post"
        class="well text-center">
    <fieldset>
      <?php foreach ($this->form->getFieldset('credentials') as $field) : ?>
        <div class="form-group">
          <?php if (!$field->hidden) : ?>
            <?php echo $field->label; ?>
            <?php echo $field->input; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </fieldset>
    <div class="controls">
      <button type="submit" class="btn btn-primary">
	<?php echo JText::_('JLOGIN'); ?>
      </button>
    </div>
    <input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
    <?php echo JHtml::_('form.token'); ?>
  </form>
</div>
