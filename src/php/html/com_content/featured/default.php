<?php
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');

$cfg = JFactory::getConfig();
?>
<?php if ($this->params->get('show_page_heading') != 0) : ?>
<?php endif; ?>
<?php if (!empty($this->lead_items)) : ?>
  <div id="main-carousel"
       class="carousel big-carousel slide"
       data-interval="10000"
       data-pause="hover"
       data-ride="carousel">
    <ol class="carousel-indicators">
      <?php $indic_idx = 0; ?>
      <?php foreach ($this->lead_items as &$item) : ?>
        <li data-target="#main-carousel"
            data-slide-to="<?php echo $indic_idx?>"
            <?php echo ($indic_idx == 0 ? 'class="active"' : '') ?>>
        </li>
      <?php $indic_idx++; ?>
      <? endforeach; ?>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php $item_idx = 0; ?>
      <?php foreach ($this->lead_items as &$item) : ?>
        <?php
          $this->item = &$item;
          $this->idx = &$item_idx;
          echo $this->loadTemplate('carousel_delegate');
          $item_idx++;
        ?>
      <?php endforeach; ?>
      <a class="left carousel-control"
         href="#main-carousel"
         role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"
              aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control"
         href="#main-carousel"
         role="button"
         data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"
              aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php endif; ?>
<div class="container featurette-content">
  <div class="row featurette">
    <div class="col-md-12 text-center">
      <h1 class="featurette-heading"><?php echo $this->escape($cfg->get('sitename')); ?></h1>
      <p><span class="glyphicon glyphicon-menu-down"></span></p>
      <hr>
  </div>
</div>
<?php ?>
