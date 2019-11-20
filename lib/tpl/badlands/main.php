<?php
// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
include('GtopiaHelper.php');

//if (!include('DOKU_TPL'+'sidebar.php')) die();
// render the content into buffer for later use
    ob_start();
    tpl_content(false);
    $buffer = ob_get_clean();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title><?php tpl_pagetitle()?>[<?php echo strip_tags($conf['title'])?>]</title>
    	<!-- Start DOKU tpl_metaheaders -->
    	<?php tpl_metaheaders()?>
    	<!-- End DOKU tpl_metaheaders -->
		<link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" type="image/x-icon" />
		<style type='text/css'>#cart-block-contents { display: none; }</style>
    	<link type="text/css" rel="stylesheet" media="all" href="style.css" />
		<link type="text/css" rel="stylesheet" media="all" href="<?php echo DOKU_TPL?>BadlandsStyles.css?v=1.01" />
	    <!--[if IE 7]>
	      <link rel="stylesheet" href="acquia_slate/ie7-fixes.css" type="text/css">
	    <![endif]-->
	    <!--[if lte IE 6]>
	      <link rel="stylesheet" href="acquia_slate/ie6-fixes.css" type="text/css">
	    <![endif]-->
	    <script type="text/javascript" src="gtopia.js"></script>		
		<script type="text/javascript" src="<?php echo DOKU_TPL?>Badlands.js?v=1.01"></script>

	</head>

  <body class="front layout-first-main">
  <div id="page">

    <div id="header-wrapper" class="clearfix">
      <div id="header-first">
        <h1><a href="/" title="Home"><?php echo strip_tags($conf['title'])?></a></h1>
      </div><!-- /header-first -->

      <div id="header-middle">
        <div id="slogan"><?php echo tpl_getConf('subtitle'); ?></div>
      </div><!-- /header-middle -->

      <div id="search-box">
        <?php tpl_searchform()?>
      </div><!-- /search-box -->
    </div><!-- /header-wrapper -->

<!-- Start of Main Image Block -->

<?php 
if(($INFO['id'] == $conf['start'] && tpl_getConf('disableMainImgOnSubpages') == "1") || tpl_getConf('disableMainImgOnSubpages') == "0"): ?>
            <div id="preface-wrapper" class="clearfix">
            </div><!-- /preface-wrapper -->
<?php endif; ?>
            <div id="main-wrapper" class="clearfix">  
                <div id="sidebar-first">

<!-- start block.tpl.php -->
<div class="block-wrapper even">
  <div class="rounded-block">
    <div class="rounded-block-top-left"></div>
    <div class="rounded-block-top-right"></div>
    <div class="rounded-outside">
      <div class="rounded-inside">
        <p class="rounded-topspace"></p>
        <div id="block-views-catalog-block_1" class="block block-views">
          <h2 class="title block-title"><span class="first-word">Categories</span></h2>
          <div class="content">
            <div class="view view-catalog view-id-catalog view-display-id-block_1 view-dom-id-3">
              <div class="view-content">
                <!-- CONTENT HERE -->
<?php //tpl_sitemap(); ?>
              </div>
            </div>
          </div>
        </div>
        <p class="rounded-bottomspace"></p>
      </div><!-- /rounded-inside -->
    </div>
    <div class="rounded-block-bottom-left"></div>
    <div class="rounded-block-bottom-right"></div>
  </div><!-- /rounded-block -->
</div>
<!-- /end block.tpl.php -->

<!-- start Table of Contents -->
<?php $page_toc = tpl_toc($return = true); ?>
<?php if (!empty($page_toc)) { ?>
<div class="block-wrapper">
  <div class="rounded-block">
    <div class="rounded-block-top-left"></div>
    <div class="rounded-block-top-right"></div>
    <div class="rounded-outside">
      <div class="rounded-inside">
        <p class="rounded-topspace"></p>
          <div class="block block-uc_cart">
            <div class="content">
              <?php echo $page_toc; ?>
            </div>
          </div>
          <p class="rounded-bottomspace"></p>
        </div><!-- /rounded-inside -->
      </div>
    <div class="rounded-block-bottom-left"></div>
    <div class="rounded-block-bottom-right"></div>
  </div><!-- /rounded-block -->
</div>
<?php } ?>
<!-- /end Table of Contents -->

</div><!-- /sidebar-first -->
<div id="content-wrapper">
  <div id="content">
    <div id="content-inner" class="clear">

    <!-- wikipage start -->
    <?php echo $buffer; ?>
    <!-- wikipage stop -->
 </div>
</div><!-- /content -->
        </div><!-- /content-wrapper -->
  
              </div><!-- /main-wrapper -->
                      <div class="item-list">
  <ul class="pager">
          <li class="pager-item"><?php tpl_actionlink('edit') ?></li>
          <li class="pager-item"><?php tpl_actionlink('history') ?></li>
          <li class="pager-item"><?php tpl_actionlink('recent') ?></li>
          <li class="pager-item"><?php tpl_actionlink('login') ?></li> 
          <li class="pager-item"><?php tpl_actionlink('profile') ?></li>
	      <li class="pager-item"><?php tpl_actionlink('index') ?></li>
	      <li class="pager-item"><?php tpl_actionlink('admin') ?></li>
	      <li class="pager-item"><?php tpl_actionlink('top') ?></li>
	      <li class="pager-item"><?php tpl_actionlink('back') ?></li>
	      <li class="pager-item"><?php tpl_actionlink('backlink') ?></li>
	      <li class="pager-item"><?php tpl_actionlink('subscribe') ?></li>
        </ul>
      </div>
    </div><!-- /page -->

    <div id="footer" class="clearfix">
      <div id="footer-wrapper">
        <div id="footer-message"><!--&copy; 2010 Caldwell Pics-->FOOTER MESSAGE</div>
        <div id="closure">CLOSURE MESSAGE</div>
          <div id="legal-notice">Theme provided under GPL license from <a href="http://www.topnotchthemes.com">Drupal themes</a> <br/>Modified by Mark Gardner of <a href="http://www.gtopia.org">Gtopia</a></div>
        </div><!-- /closure -->
      </div><!-- /footer-wrapper -->
    </div><!-- /footer -->       
<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
  </body>
</html>
