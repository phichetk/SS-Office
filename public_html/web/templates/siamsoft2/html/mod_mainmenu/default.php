<?php
defined('_JEXEC') or die('Restricted access'); // no direct access

ob_start();
require_once realpath(dirname(__FILE__) . str_replace('/', DIRECTORY_SEPARATOR, '/../../../../modules/mod_mainmenu/tmpl/default.php'));
ob_clean();

if (!defined('modMainMenuArtxExtensions'))
{

	function modMainMenuArtXMLCallback(&$node, $args)
	{
		$options = $GLOBALS['modMainMenuArtXMLCallbackOptions'];
		if ($node->name() == 'li') {
			if (!$options['show_submenus'] && $node->level() == 1) {
				if ($ul = $node->getElementByPath('ul'))
					$node->removeChild($ul);
			}
			$liChildren = & $node->_children;
			if (count($liChildren) > 0) {
				// element                 ( $img?,                                          $span ( $text     )  )      )
				// <a href="...">          <img src="..." (align="left|right")? alt="..." />?<span><![CDATA[...]]></span></a>
				// <span class="separator"><img src="..." (align="left|right")? alt="..." />?<span><![CDATA[...]]></span></span>
				$element = & $liChildren[0];
				$img = null;
				if ($element->_children[0]->name() == 'img') {
					$img = & $element->_children[0];
					$element->removeChild($img);
				}
				$span = & $element->_children[0];
				if (count($liChildren) > 1)
					$sublist = & $liChildren[1];
				else
					$sublist = null;
				$element->removeChild($span);
				// convert separator to anchor
				if ($element->name() == 'span' && $element->attributes('class') == 'separator') {
					$element->_name = 'a';
					$element->addAttribute('href', '#');
					$element->addAttribute('onclick', 'return false;');
					if ($sublist == null)
						$element->addAttribute('class', 'separator separator-without-submenu');
				}
				// add extra spans for top level items, required for design
				if ($element->level() == ($options['start'] + 1) * 2) {
					$lspan = & $element->addChild('span', array('class' => 'l'));
					$rspan = & $element->addChild('span', array('class' => 'r'));
					$tspan = & $element->addChild('span', array('class' => 't'));
					$container = & $tspan;
				} else {
					$container = & $element;
				}
				$text = $span->data();
				// container is always <a ...>...</a> here
				if ($img != null) {
					$align = $img->attributes('align');
					if ($align == 'left' || $align == '') {
						$container->addChild('img', array('class' => 'art-metadata-icon',
							'src' => $img->attributes('src'),
							'style' => 'margin-right: 5px; vertical-align: middle;',
							'alt' => $img->attributes('alt')));
						$extraArtxSpan = & $container->addChild('artx-extra-span');
						$extraArtxSpan->setData($text);
					} else if ($align == 'right') {
						$extraArtxSpan = & $container->addChild('artx-extra-span');
						$extraArtxSpan->setData($text);
						$container->addChild('img', array('class' => 'art-metadata-icon',
							'src' => $img->attributes('src'),
							'style' => 'margin-left: 5px; vertical-align: middle;',
							'alt' => $img->attributes('alt')));
					}
				} else {
					$container->setData($text);
				}
			}

			modMainMenuXMLCallback($node, $args);

			// this should be after modMainMenuXMLCallback, because the callback sets class='active' and id='current'
			if ($options['vmenu'] !== null && !$options['vmenu']['simple']) {
				$class = $node->attributes('class');
				$isActive = $class && false !== strpos(' ' . $class, ' active');
				if ($node->attributes('id') != 'current' && !$isActive) {
					if ($ul = $node->getElementByPath('ul'))
						$node->removeChild($ul);
				}
			}

			$class = $node->attributes('class');
			if ($class && false !== strpos(' ' . $class, ' active')) {
				$element->addAttribute('class', 'active');
			}
		} else {
			modMainMenuXMLCallback($node, $args);
		}

	}



	define('modMainMenuArtxExtensions', true);
}

if (isset($attribs['name']) && $attribs['name'] == 'user3') {
	$GLOBALS['modMainMenuArtXMLCallbackOptions'] = array(
		'show_submenus' => $GLOBALS['artx_settings']['menu']['show_submenus'] && 1 == $params->get('showAllChildren'),
		'vmenu' => null,
		'start' => $params->get('startLevel')
	);
	$xml = modMainMenuHelper::getXML($params->get('menutype'), $params, 'modMainMenuArtXMLCallback');
	if ($xml) {
		$xml->addAttribute('class', 'art-menu');
		if ($tagId = $params->get('tag_id')) {
			$xml->addAttribute('id', $tagId);
		}
		$result = JFilterOutput::ampReplace($xml->toString((bool)$params->get('show_whitespace')));
		$result = str_replace(array('<ul/>', '<ul />', '<artx-extra-span>', '</artx-extra-span>'), '', $result);
		$result = preg_replace('~<span([^>]*) />~', '<span$1></span>', $result);
		echo artxMenuDecorator($result);
	}
	unset($GLOBALS['tmp_menu_show_submenus']);
} else if (preg_match('/\bart-vmenu\b/', $params->get('moduleclass_sfx'))) {
	$GLOBALS['modMainMenuArtXMLCallbackOptions'] = array(
		'show_submenus' => $GLOBALS['artx_settings']['vmenu']['show_submenus'] && 1 == $params->get('showAllChildren'),
		'vmenu' => array('simple' => $GLOBALS['artx_settings']['vmenu']['simple']),
		'start' => $params->get('startLevel')
	);
	$xml = modMainMenuHelper::getXML($params->get('menutype'), $params, 'modMainMenuArtXMLCallback');
	if ($xml) {
		$xml->addAttribute('class', 'art-vmenu');
		if ($tagId = $params->get('tag_id')) {
			$xml->addAttribute('id', $tagId);
		}
		$result = JFilterOutput::ampReplace($xml->toString((bool)$params->get('show_whitespace')));
		$result = str_replace(array('<ul/>', '<ul />', '<artx-extra-span>', '</artx-extra-span>'), '', $result);
		$result = preg_replace('~<span([^>]*) />~', '<span$1></span>', $result);
		echo $result;
	}
	unset($GLOBALS['tmp_menu_show_submenus']);
} else {
	modMainMenuHelper::render($params, 'modMainMenuXMLCallback');
}