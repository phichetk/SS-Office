<?php
//Virus Map//
// $Id: virusmap.php,v 1.0 2003/10/10 PDG Exp $
/**
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: 1.0 $
**/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// load the html drawing class
require_once( $mainframe->getPath( 'front_html' ) );

virusmap_html::WriteVirusMap(); ?>