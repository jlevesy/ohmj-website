<?php
require_once dirname(__FILE__) . '/helper.php'
require JModuleHelper::getLayoutPath('mod_ohmjcarousel');

$items = ModOhmjCarouselHelper::getFeaturedArticles(3);
?>
