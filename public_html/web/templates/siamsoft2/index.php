<?php
defined('_JEXEC') or die('Restricted access'); // no direct access
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = null;
if (isset($this))
  $document = & $this;
$baseUrl = $this->baseurl;
$templateUrl = $this->baseurl . '/templates/' . $this->template;
artxComponentWrapper($document);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
 <jdoc:include type="head" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/general.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" />
 <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
 <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery.js"></script>
 <script type="text/javascript">jQuery.noConflict();</script>
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>
</head>
<body>
<div id="art-main">
<div class="art-sheet">
    <div class="art-sheet-cc"></div>
    <div class="art-sheet-body">
<div class="art-header">
    <div class="art-header-center">
        <div class="art-header-jpeg"></div>
    </div>
<script type="text/javascript" src="<?php echo $templateUrl; ?>/swfobject.js"></script>
<div id="art-flash-area">
<div id="art-flash-container">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="900" height="225" id="art-flash-object">
    <param name="movie" value="<?php echo $templateUrl; ?>/images/flash.swf" />
    <param name="quality" value="high" />
	<param name="scale" value="exactfit" />
	<param name="wmode" value="transparent" />
	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
    <param name="swfliveconnect" value="true" />
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="<?php echo $templateUrl; ?>/images/flash.swf" width="900" height="225">
        <param name="quality" value="high" />
	    <param name="scale" value="exactfit" />
	    <param name="wmode" value="transparent" />
	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
        <param name="swfliveconnect" value="true" />
    <!--<![endif]-->
      	<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
    <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
</object>
</div>
</div>
<script type="text/javascript">swfobject.switchOffAutoHideShow();swfobject.registerObject("art-flash-object", "9.0.0", "<?php echo $templateUrl; ?>/expressInstall.swf");</script>
<div class="art-logo">
 <h1 id="name-text" class="art-logo-name"><a href="<?php echo $baseUrl; ?>/">SIAMSOFT.COM CO.,LTD.</a></h1>
</div>


</div>
<jdoc:include type="modules" name="banner1" style="artstyle" artstyle="art-nostyle" />
<?php echo artxPositions($document, array('top1', 'top2', 'top3'), 'art-block'); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
<?php if (artxCountModules($document, 'left')) : ?>
<div class="art-layout-cell art-sidebar1">
<?php echo artxModules($document, 'left', 'art-block'); ?>

  <div class="cleared"></div>
</div>
<?php endif; ?>
<?php $contentCellStyle = artxCountModules($document, 'left') ? 'content' : 'content-wide'; ?>
<div class="art-layout-cell art-<?php echo $contentCellStyle; ?>">

<?php
  echo artxModules($document, 'banner2', 'art-nostyle');
  if (artxCountModules($document, 'breadcrumb'))
    echo artxPost(null, artxModules($document, 'breadcrumb'));
  echo artxPositions($document, array('user1', 'user2'), 'art-article');
  echo artxModules($document, 'banner3', 'art-nostyle');
?>
<?php if (artxHasMessages()) : ?><div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner">
<div class="art-postcontent">

<jdoc:include type="message" />

</div>
<div class="cleared"></div>

</div>

		<div class="cleared"></div>
    </div>
</div>
<?php endif; ?>
<jdoc:include type="component" />
<?php echo artxModules($document, 'banner4', 'art-nostyle'); ?>
<?php echo artxPositions($document, array('user4', 'user5'), 'art-article'); ?>
<?php echo artxModules($document, 'banner5', 'art-nostyle'); ?>

  <div class="cleared"></div>
</div>

    </div>
</div>
<div class="cleared"></div>


<?php echo artxPositions($document, array('bottom1', 'bottom2', 'bottom3'), 'art-block'); ?>
<jdoc:include type="modules" name="banner6" style="artstyle" artstyle="art-nostyle" />
<div class="art-footer">
    <div class="art-footer-t"></div>
    <div class="art-footer-b"></div>
    <div class="art-footer-body">
        <div class="art-footer-text">
  <?php if (artxCountModules($document, 'copyright') == 0): ?>
    <?php ob_start(); ?>
<p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p><p>Copyright &copy; %YEAR%. All Rights Reserved.</p>

    <?php echo str_replace('%YEAR%', date('Y'), ob_get_clean()); ?>
  <?php else: ?>
  <?php echo artxModules($document, 'copyright', 'art-nostyle'); ?>
  <?php endif; ?>
        </div>
		<div class="cleared"></div>
    </div>
</div>
		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<p class="art-page-footer"></p>

</div>





</body> 
</html>