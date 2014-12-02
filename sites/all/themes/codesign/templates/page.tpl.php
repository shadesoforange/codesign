<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/sites/all/themes/codesign/mobile-detect/Mobile_Detect.php');
	  $detect = new Mobile_Detect;
	  ?>
	  
<div id="page">

  <header class="header <?php if ($detect->isMobile()){ print "mobile"; } ?>" id="header" role="banner">

    <?php print render($page['header']); ?>

  </header>
  
  <?php 
	  	$nav = render($page['navigation']);
	  	if($nav): ?>
  	<div id="navigation" <?php if ($detect->isMobile()){ print 'class="mobile"'; } ?>>

      <?php print $nav; ?>

    </div>
    
    <?php endif; ?>
  
  <div id="main" <?php if ($detect->isMobile()){ print 'class="mobile"'; } ?>>
  	
  	
  	
    <div id="content" class="column <?php if ($detect->isMobile()){ print 'mobile'; } ?>" role="main">
      <?php print render($page['highlighted']); ?>
      <!-- <?php print $breadcrumb; ?> -->
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
	  <!--<h1 class="page__title title" id="page-title"><?php print $title; ?></h1>-->
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

</div>

<div id="footer-wrapper" <?php if ($detect->isMobile()){ print 'class="mobile"'; } ?>>
  <?php print render($page['footer']); ?>
</div>

<?php print render($page['bottom']); ?>
