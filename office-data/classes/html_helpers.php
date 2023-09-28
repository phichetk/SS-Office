<?php
/**
 * HtmlHelper
 * This file contains utilities for rendering HTML
 * @author Paramai Supadulchai <paramai@gmail.com>
 * @version 1.1
 *
 */
class HTMLHelper {

	function printAlwaysEmptyCell($sth) {
		print($sth ? $sth : "&nbsp;");
	}

	function hasValue($sth) {
		return (isset($sth) && ($sth != ""));
	}

	function generateDateSelect($nameDay, $nameMonth, $nameYear, $value, $fromYear, $toYear, $isBE, $defaultChoosingMessage) {
		list($valueYear, $valueMonth, $valueDay) = split("-", $value);
		$out = $this->generateDaySelect($nameDay, intval($valueDay), $defaultChoosingMessage);
		$out .= $this->generateMonthSelect($nameMonth, intval($valueMonth), $defaultChoosingMessage);
		$out .= $this->generateYearSelect($nameYear, intval($valueYear), $defaultChoosingMessage, $isBE, $fromYear, $toYear);
		return $out;
	}

	// Return day select
	function generateDaySelect($name, $value, $defaultChoosingMessage) {
		$out = 		'<select name="' . $name .'">' . "\n";
		$out .=		'<option value="">' . $defaultChoosingMessage . '</option>' . "\n";
		for ($i = 1; $i <= 31; $i++) {
			$out .= "<option value=\"" . $i . "\"" . (($value == $i) ? " SELECTED" : "") . ">" . $i . "</option>\n";
		}
		$out .=		"</select>\n";
		return $out;
	}
	
	// Return month select
	function generateMonthSelect($name, $value, $defaultChoosingMessage) {
		$out = 		'<select name="' . $name .'">' . "\n";
		$out .=		'<option value="">' . $defaultChoosingMessage . '</option>' . "\n";
		for ($i = 1; $i <= 12; $i++) {
			$out .= "<option value=\"" . $i . "\"" . (($value == $i) ? " SELECTED" : "") . ">" . $i . "</option>\n";
		}
		$out .=		"</select>\n";
		return $out;
	}
	
	// Return year select
	function generateYearSelect($name, $value, $defaultChoosingMessage, $isBE, $fromYear, $toYear, $direction = "U") {
		$out = 		'<select name="' . $name .'">' . "\n";
		$out .=		'<option value="">' . $defaultChoosingMessage . '</option>' . "\n";
		if ($direction == "U") {
			for ($i = $fromYear; $i <= $toYear; $i++) {
				$out .= "<option value=\"" . $i . "\"" . (($value == $i) ? " SELECTED" : "") . ">" . ($isBE?$i + 543:$i) . "</option>\n";
			}
		} else {
			for ($i = $toYear; $i >= $fromYear; $i--) {
				$out .= "<option value=\"" . $i . "\"" . (($value == $i) ? " SELECTED" : "") . ">" . ($isBE?$i + 543:$i) . "</option>\n";
			}
		}
		$out .=		"</select>\n";
		return $out;
	}

	function getInputRadioActive($name, $activeYes, $activeNo, $default) {
		if (!isset($default) || $default == "") {
			$default = 1;
		}
		$param = array($activeYes => 1, $activeNo => 0);
		return $this->genInputRadio($name, $param, $default);
	}

	function genInputRadio($name, $param, $default) {
		foreach($param as $key => $value) {
			$out .= "<input name=\"{$name}\" id=\"{$name}\" type=\"radio\" value=\"{$key}\"";
			if ($key == $default) {
				$out .= " checked";
			}
			$out .= " /> {$value}";
		}
		return $out;
	}
	
	// Return select options
	function genInputSelect($list, $defaultValue, $name, $defaultChoosingMessage, $codeField, $nameField) {
		$out = "<select name=\"{$name}\" id=\"{$name}\">";
		if ($defaultChoosingMessage && ($defaultChoosingMessage != "")) {
			$out .=		'<option value="">' . $defaultChoosingMessage . '</option>' . "\n";
		}
		reset($list);
		for ($i = 0; $i < sizeof($list); $i++) {
			if ($list[$i][$codeField] == $defaultValue) {
					$out .= '<option value="' . $list[$i][$codeField] . '" SELECTED>' . $list[$i][$nameField] . '</option>' . "\n";
			} else {
				$out .= '<option value="' . $list[$i][$codeField] . '">' . $list[$i][$nameField] . '</option>' . "\n";
			}
		}
		$out .=		"</select>\n";
		return $out;
	}

}
?>
