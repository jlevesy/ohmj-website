<?php
defined('_JEXEC') or die;

$class = $item->anchor_css ? 'class="' . $item->anchor_css . '" ' : '';
$title = $item->anchor_title ? 'title="' . $item->anchor_title . '" ' : '';

if ($item->menu_image)
{
  $item->params->get('menu_text', 1) ?
    $linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" /><span class="image-title">' . $item->title . '</span> ' :
    $linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" />';
}
else
{
  $linktype = $item->title;
}

if ($item->deeper)
{
?><a href="#"
     class="dropdown-toggle"
     data-toggle="dropdown"
     role="button"
     aria-haspopup="true"
     aria-expanded="false">
    <?php echo $linktype; ?><span class="caret"></span>
    </a><?php
}
else
{
  $flink = $item->flink;
  $flink = JFilterOutput::ampReplace(htmlspecialchars($flink));

  switch ($item->browserNav) :
  default:
  case 0:
    ?><a <?php echo $class; ?>href="<?php echo $flink; ?>" <?php echo $title; ?>><?php echo $linktype; ?></a><?php
    break;
  case 1:
    // _blank
    ?><a <?php echo $class; ?>href="<?php echo $flink; ?>" target="_blank" <?php echo $title; ?>><?php echo $linktype; ?></a><?php
    break;
  case 2:
    // Use JavaScript "window.open"
    $options = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,' . $params->get('window_open');
    ?><a <?php echo $class; ?>href="<?php echo $flink; ?>" onclick="window.open(this.href,'targetWindow','<?php echo $options;?>');return false;" <?php echo $title; ?>><?php echo $linktype; ?></a><?php
    break;
    endswitch;
}
