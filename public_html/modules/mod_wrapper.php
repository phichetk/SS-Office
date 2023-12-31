<?php
/**
* @version $Id: mod_wrapper.php 2528 2006-02-22 16:23:57Z stingrey $
* @package Joomla_1.0.0
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

$params->def( 'url', '' );
$params->def( 'scrolling', 'auto' );
$params->def( 'height', '200' );
$params->def( 'height_auto', '0' );
$params->def( 'width', '100%' );
$params->def( 'add', '1' );

$url = $params->get( 'url' );
if ( $params->get( 'add' ) ) {
	// adds 'http://' if none is set
	if ( substr( $url, 0, 1 ) == '/' ) {
		// relative url in component. use server http_host.
		$url = 'http://'. $_SERVER['HTTP_HOST'] . $url;
	} elseif ( !strstr( $url, 'http' ) && !strstr( $url, 'https' ) ) {
		$url = 'http://'. $url;
	} else {
		$url = $url;
	}
}

// auto height control
if ( $params->def( 'height_auto' ) ) {
	$load = 'onload="iFrameHeight()"';
} else {
	$load = '';
}

?>
<script language="javascript" type="text/javascript">
function iFrameHeight() {
	var h = 0;
	if ( !document.all ) {
		h = document.getElementById('blockrandom').contentDocument.height;
		document.getElementById('blockrandom').style.height = h + 60 + 'px';
	} else if( document.all ) {
		h = document.frames('blockrandom').document.body.scrollHeight;
		document.all.blockrandom.style.height = h + 20 + 'px';
	}
}
</script>
<iframe
<?php echo $load; ?>
id="blockrandom"
src="<?php echo $url; ?>"
width="<?php echo $params->get( 'width' ); ?>"
height="<?php echo $params->get( 'height' ); ?>"
scrolling="<?php echo $params->get( 'scrolling' ); ?>"
align="top"
frameborder="0"
class="wrapper<?php echo $params->get( 'moduleclass_sfx' ); ?>">
<?php echo _CMN_IFRAMES; ?>
</iframe>