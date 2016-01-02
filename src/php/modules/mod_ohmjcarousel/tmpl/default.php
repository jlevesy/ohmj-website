<?php  defined('_JEXEC') or die; ?>
<?php
  $items = ModOhmjCarouselHelper::getFeaturedArticles(3);
?>
<?php if (!empty($items)) : ?>
  <div id="main-carousel"
       class="carousel big-carousel slide"
       data-interval="10000"
       data-pause="hover"
       data-ride="carousel">
    <ol class="carousel-indicators">
      <?php $indic_idx = 0; ?>
      <?php foreach ($items as &$item) : ?>
        <li data-target="#main-carousel"
            data-slide-to="<?php echo $indic_idx?>"
            <?php echo ($indic_idx == 0 ? 'class="active"' : '') ?>>
        </li>
      <?php $indic_idx++; ?>
      <? endforeach; ?>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php $item_idx = 0; ?>
      <?php foreach ($items as &$item) : ?>
        <?php
          require JModuleHelper::getLayoutPath('mod_ohmjcarousel', 'default_item');
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
