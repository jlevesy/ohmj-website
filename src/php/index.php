<?php
defined('_JEXEC') or die( 'Restricted Access');
// Variables
$doc = JFactory::getDocument();
$cfg = JFactory::getConfig();
$template = 'templates/' . $this->template;

// Remove included scripts
$this->_script = $this->_scripts = array();

// Add our app.css file
$doc->addStylesheet($template . '/css/app.css')
?>
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="<?php echo $this->language; ?>"
      lang="<?php echo $this->language; ?>"
      dir="<?php echo $this->direction; ?>">
  <head>
    <jdoc:include type="head" />
  </head>
  <body>
    <?php if ($this->countModules('navigation')): ?>
      <nav class="navbar navbar-default navbar-fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#navbar"
                    aria-expanded="false"
                    aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <div class="navbar-brand">
            <?php echo $cfg->get('sitename'); ?>
          </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <jdoc:include type="modules" name="navigation" style="none" />
        </div>
      </nav>
    <?php endif; ?>
    <div class="header">
      <jdoc:include type="modules" name="header" style="none"/>
    </div>
    <div class="content">
      <jdoc:include type="message" />
      <jdoc:include type="component" />
      <jdoc:include type="modules" name="footer" style="none" />
    </div>
    <jdoc:include type="modules" name="debug" style="none" />

    <script src="<?php echo $template ?>/js/jquery.min.js"></script>
    <script src="<?php echo $template ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $template ?>/js/scroll-watcher.js"></script>
  </body>
</html>
