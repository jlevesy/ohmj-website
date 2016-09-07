<?php defined('_JEXEC') or die; ?>
<ul class="lang-chooser nav navbar-nav navbar-right hidden-sm hidden-xs">
  <?php foreach ($list as $language) : ?>
    <li class="<?php echo $language->active ? 'active' : '';?>">
     <a href="<?php echo $language->link;?>">
        <?php echo JHtml::_('image', 'mod_languages/' . $language->image . '.gif', $language->title_native, array('title' => $language->title_native), true);?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
