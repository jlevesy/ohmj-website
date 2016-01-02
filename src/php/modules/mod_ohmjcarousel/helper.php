<?php
class ModOhmjCarouselHelper {

  public static function getFeaturedArticles($limit) {
    $db = JFactory::getDbo();
    $query = $db->getQuery(true)
      ->select($db->quoteName(array('title', 'modified', 'introtext', 'slug', 'catid', 'language'))
      ->from($db->quoteName('#__content'))
      ->where('featured = 1')
      ->order('modified DESC')
      ->setLimit($limit);

    $db->setQuery($query);
    return $db->loadObjectList();
  }

}
?>
