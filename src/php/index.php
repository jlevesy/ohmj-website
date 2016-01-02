<?php
defined('_JEXEC') or die( 'Restricted Access')
?>
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="<?php echo $this->language; ?>"
      lang="<?php echo $this->language; ?>"
      dir="<?php echo $this->direction; ?>">
  <head>
    <link rel="stylesheet"
          href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/app.css" type="text/css" />
  </head>
  <body>
    <?php if ($this->countModules('navigation')): ?>
      <nav class="navbar navbar-inverse navbar-fixed-top navbar-transparent">
        <div class="container">
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
          <a class="navbar-brand" href="#">OHMJ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <jdoc:include type="modules" name="navigation" style="none" />
        </div>
      </nav>
    <?php endif; ?>
    <div class="header">
      <jdoc:include type="modules" name="header" style="none"/>
    </div>
    <div class="container featurette-content">
      <jdoc:include type="component" />
    </div>
    <jdoc:include type="modules" name="footer" style="none" />
    <jdoc:include type="message" />
    <jdoc:include type="modules" name="debug" style="none" />

    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scroll-watcher.js"></script>
  </body>
</html>
