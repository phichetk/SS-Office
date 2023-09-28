<?php
/**
* @version $Id: mod_slick_rss.php  2007-23-01 15:12:03Z davidwhthomas $
* @package mod_slick_rss
* @author David Thomas davidwhthomas@gmail.com
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* @version 1.2
* @credit: Joomla! Open Source Matters for the RSS parsing code
* @description: Joomla module to show list of RSS newslinks with tooltip info box for item description text.
*/

// following line is to prevent direct access to this script via the url
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

	// feed output
	global $mosConfig_absolute_path, $mosConfig_cachepath;

	// check if cache directory is writeable
	$cacheDir 		= $mosConfig_cachepath .'/';	
	if ( !is_writable( $cacheDir ) ) {	
		return 'Cache Directory Unwriteable';
	}
	
	$rssurl1 			= $params->get( 'rssurl1',NULL );
	$rssurl2 			= $params->get( 'rssurl2',NULL );
	$rssurl3 			= $params->get( 'rssurl3',NULL );
	$rssurl4 			= $params->get( 'rssurl4',NULL );
	$rssurl5 			= $params->get( 'rssurl5',NULL );
	$rssitems 			= $params->get( 'rssitems', 5 );
	$rssdesc 			= $params->get( 'rssdesc', 1 );
	$rssimage 			= $params->get( 'rssimage', 1 );
	$rssitemtitle_words = $params->def( 'rssitemtitle_words', 0 );
	$rssitemdesc		= $params->get( 'rssitemdesc', 0 );
	$rssitemdesc_images	= $params->get( 'rssitemdesc_images', 1 );
	$rssitemdesc_words	= $params->get( 'rssitemdesc_words', 0 );
	$rsstitle			= $params->get( 'rsstitle', 1 );
	$rsscache			= $params->get( 'rsscache', 3600 );

	$enable_tooltip     = $params->get( 'enable_tooltip','yes' );
	$tooltip_desc_words	= $params->def( 't_word_count_desc', 25 );
	$tooltip_desc_images= $params->def( 'tooltip_desc_images', 1 );
	$tooltip_title_words= $params->def( 't_word_count_title', 25 );
	$tooltip_bgcolor    = $params->get( 'tooltip_bgcolor','#24537d' );
	$tooltip_capcolor   = $params->get( 'tooltip_capcolor','#ffffff' );
	$tooltip_fgcolor    = $params->get( 'tooltip_fgcolor','#E1F0FF' );
	$tooltip_textcolor  = $params->get( 'tooltip_textcolor','#000000' );
	$tooltip_border     = $params->get( 'tooltip_border','1' );
	$tooltip_extra_invocation_string = $params->get( 'tooltip_extra_invocation_string','' );
	
	if($tooltip_extra_invocation_string){
		$tooltip_extra_invocation_string = ",".$tooltip_extra_invocation_string; //add leading comma for parameter list
	}

	$contentBuffer	= '';
	
	$LitePath 		= $mosConfig_absolute_path .'/includes/Cache/Lite.php';
	require_once( $mosConfig_absolute_path .'/includes/domit/xml_domit_rss.php' );
	
	//add support for multiple RSS feeds
	$rssFeeds = array($rssurl1, $rssurl2, $rssurl3, $rssurl4, $rssurl5);
	foreach ($rssFeeds as $index => $value) {
		if (empty($value)) unset($rssFeeds[$index]);
	}
		
	foreach($rssFeeds as $rssurl){
		
		$rssDoc = new xml_domit_rss_document();
		$rssDoc->useCacheLite(true, $LitePath, $cacheDir, $rsscache);
		$success = $rssDoc->loadRSS( $rssurl );

		if ( $success )	{		
			$content_buffer = '';
			$totalChannels 	= $rssDoc->getChannelCount();
	
			for ( $i = 0; $i < $totalChannels; $i++ ) {
				$currChannel =& $rssDoc->getChannel($i);
				$elements 	= $currChannel->getElementList();
				$iUrl		= 0;
				foreach ( $elements as $element ) {
					//image handling
					if ( $element == 'image' ) {
						$image =& $currChannel->getElement( DOMIT_RSS_ELEMENT_IMAGE );
						$iUrl	= $image->getUrl();
						$iTitle	= $image->getTitle();
					}
				}
	
				// feed title
				$content_buffer = '<table cellpadding="0" cellspacing="0" class="moduletable'.$moduleclass_sfx.'">' . "\n";
							
				if ( $currChannel->getTitle() && $rsstitle ) {
					$feed_title 	= $currChannel->getTitle();
					$feed_title 	= mosCommonHTML::newsfeedEncoding( $rssDoc, $feed_title );

					$content_buffer .= "<tr>\n";
					$content_buffer .= "	<td>\n";
					$content_buffer .= "		<strong>\n";
					$content_buffer .= "		<a href=\"" . ampReplace( $currChannel->getLink() )  . "\" target=\"_blank\">\n";
					$content_buffer .= $feed_title . "</a>\n";
					$content_buffer .= "		</strong>\n";
					$content_buffer .= "	</td>\n";
					$content_buffer .= "</tr>\n";
	
				}
	
				// feed description
				if ( $rssdesc ) {
					$feed_descrip 	= $currChannel->getDescription();
					$feed_descrip 	= mosCommonHTML::newsfeedEncoding( $rssDoc, $feed_descrip );
					
					$content_buffer .= "<tr>\n";
					$content_buffer .= "	<td>\n";
					$content_buffer .= $feed_descrip;
					$content_buffer .= "	</td>\n";
					$content_buffer .= "</tr>\n";
				}
				
				// feed image
				if ( $rssimage && $iUrl ) {
					$content_buffer .= "<tr>\n";
					$content_buffer .= "	<td align=\"center\">\n";
					$content_buffer .= "		<image src=\"" . $iUrl . "\" alt=\"" . @$iTitle . "\"/>\n";
					$content_buffer .= "	</td>\n";
					$content_buffer .= "</tr>\n";
				}
				
				//calculate number of items to show
				$actualItems 	= $currChannel->getItemCount();
				$setItems 		= $rssitems;
	
				if ($setItems > $actualItems) {
					$totalItems = $actualItems;
				} else {
					$totalItems = $setItems;
				}
	
				$content_buffer .= "<tr>\n";
				$content_buffer .= "	<td>\n";
				$content_buffer .= "		<ul class=\"newsfeed" . $moduleclass_sfx . "\">\n";
	
						for ($j = 0; $j < $totalItems; $j++) {
							$currItem =& $currChannel->getItem($j);
							
							// item title							
							$item_title = $currItem->getTitle();
							$item_title = mosCommonHTML::newsfeedEncoding( $rssDoc, $item_title );
							// word limit check
							if ( $rssitemtitle_words ) {
								$item_titles = explode( ' ', $item_title );
								$count = count( $item_titles );
								if ( $count > $rssitemtitle_words ) {
									$item_title = '';
									for( $i=0; $i < $rssitemtitle_words; $i++ ) {
										$item_title .= ' '. $item_titles[$i];
									}
									$item_title .= '...';
								}
							}
						
							// item description
							if($rssitemdesc){
								$desc = $currItem->getDescription();
								if(!$rssitemdesc_images){
									$desc = preg_replace("/<img[^>]+\>/i", "", $desc);
								}
								$desc = mosCommonHTML::newsfeedEncoding( $rssDoc, $desc );	
								//word limit check
								if ( $rssitemdesc_words ) {
									$texts = explode( ' ', $desc );
									$count = count( $texts );
									if ( $count > $rssitemdesc_words ) {
										$desc = '';
										for( $i=0; $i < $rssitemdesc_words; $i++ ) {
											$desc .= ' '. $texts[$i];
										}
										$desc .= '...';
									}
								}									
							}
							// tooltip text
							if ( $enable_tooltip =='yes' ) {
								//load support js library
								mosCommonHTML::loadOverlib();
								//tooltip item title
								$t_item_title = $currItem->getTitle();
								$t_item_title = mosCommonHTML::newsfeedEncoding( $rssDoc, $t_item_title );
								// word limit check
								if ( $tooltip_title_words ) {
									$t_item_titles = explode( ' ', $t_item_title );
									$count = count( $t_item_titles );
									if ( $count > $tooltip_title_words ) {
										$tooltip_title = '';
										for( $i=0; $i < $tooltip_title_words; $i++ ) {
											$tooltip_title .= ' '. $t_item_titles[$i];
										}
										$tooltip_title .= '...';						
									}else{
										$tooltip_title = $t_item_title;	
									}
								}else{
									$tooltip_title = $t_item_title;	
								}
								//tooltip item description
								$text = $currItem->getDescription();
								if(!$tooltip_desc_images){
									$text = preg_replace("/<img[^>]+\>/i", "", $text);
								}
								$text = mosCommonHTML::newsfeedEncoding( $rssDoc, $text );
								// word limit check
								if ( $tooltip_desc_words ) {
									$texts = explode( ' ', $text );
									$count = count( $texts );
									if ( $count > $tooltip_desc_words ) {
										$text = '';
										for( $i=0; $i < $tooltip_desc_words; $i++ ) {
											$text .= ' '. $texts[$i];
										}
										$text .= '...';
									}
								}									
								//generate tooltip content
								$text = preg_replace("/(\r\n|\n|\r)/", " ", $text); //replace new line characters, important!
								$text = htmlspecialchars(addslashes($text)); //format text for overlib popup html display
								$tooltip = " onmouseover=\"overlib('".$text."', CAPTION, '".htmlspecialchars(addslashes($tooltip_title))."', FGCOLOR, '".$tooltip_fgcolor."', BGCOLOR, '".$tooltip_bgcolor."', BORDER, ".$tooltip_border.", CAPCOLOR, '".$tooltip_capcolor."', TEXTCOLOR, '".$tooltip_textcolor."'".$tooltip_extra_invocation_string.");\" onmouseout=\"return nd();\" "; //assign mouseover text to put in title hyperlink
							}else{ 
								$tooltip = "";
							}							
							
							// START fix for RSS enclosure tag url not showing
							$content_buffer .= "<li class=\"newsfeed" . $moduleclass_sfx . "\">\n";
							$content_buffer .= "	<strong>\n";
							if ($currItem->getLink()) {
								$content_buffer .= "        <a ".$tooltip." href=\"" . ampReplace( $currItem->getLink() ) . "\" target=\"_blank\">\n";
								$content_buffer .= "      " . $item_title . "</a>\n";
								if($rssitemdesc){ //show item desc
									$content_buffer .= "      <br />" . $desc . "\n";
								}
							} else if ($currItem->getEnclosure()) {
								$enclosure = $currItem->getEnclosure();
								$eUrl	= $enclosure->getUrl();
								$content_buffer .= "        <a href=\"" . ampReplace( $eUrl ) . "\" target=\"_blank\">\n";
								$content_buffer .= "      " . $item_title . "</a>\n";
							}  else if (($currItem->getEnclosure()) && ($currItem->getLink())) {
								$enclosure = $currItem->getEnclosure();
								$eUrl	= $enclosure->getUrl();
								$content_buffer .= "        <a href=\"" . ampReplace( $currItem->getLink() ) . "\" target=\"_blank\">\n";
								$content_buffer .= "      " . $item_title . "</a><br/>\n";
								$content_buffer .= "        <a href=\"" . ampReplace( $eUrl ) . "\" target=\"_blank\"><u>Download</u></a>\n";
							}
							$content_buffer .= "	</strong>\n";
							// END fix for RSS enclosure tag url not showing
							$content_buffer .= "</li>\n";
						}
				$content_buffer .= "    </ul>\n";
				$content_buffer .= "	</td>\n";
				$content_buffer .= "</tr>\n";
				$content_buffer .= "</table>\n";
			}
			print $content_buffer;
		}
	}
?>