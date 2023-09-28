<?php

/*
+--------------------------------------------------------------------------
|   Dhammamkaya Centers - Class Helpers
|   =============================================
|   by Adirake Pimruang and Paramai Supadulchai <paramai@dmc.tv>
|   (c) 2548 - 2550 Dhammakaya Foundation
|   http://www.dhammakaya.or.th
|   =============================================
|   Web: http://www.dmc.tv
|   Licence Info: http://www.paramai.net/license
+---------------------------------------------------------------------------
|   > $Date: 2007-07-16 18:00:00
|   > $Revision: 1 $
+---------------------------------------------------------------------------
|   > This file is used by all other classes to make it easier to generate 
|	> SQL and extract rows returned from MySQL to PHP associative arrays.
|   > Page written by Adirake Pimruang and Paramai Supadulchai
|   > Date started: 18th July 2550
|	> Module Version Number: 1.2.0
|	>
|	> Release notes
|	> =============
|	> Version 1.2
|	> - function "inames" is added
+--------------------------------------------------------------------------
*/

class ClassHelper {

	function genUpdateSQL($dbName, $tableName, $param, $key_name, $key_value) {
		$new_param = array_merge($param, array($key_name => $key_value));
		return $this->genAddUpdateSQL($dbName, $tableName, $new_param, true);
	}

	/**
	 * This function generate MySQL INSERT INTO ...
	 * ON DUPLICATE UPDATE ...
	 * based on the given parameters
	 * @param string dbName the name of the database
	 * @param string tableName the name of the table to insert/update data
	 * @param array an associative array containing parameters' names and values
	 * @param boolean dupUpdate generate ON DUPLICATE KEY UPDATE?
	 * @return string generated SQL
	 */
	function genAddUpdateSQL($dbName, $tableName, $param, $dupUpdate) {
		if (sizeof($param) == 0) {
			die("EXCEPTION! ClassHelper->genAddUpdateSQL ::: Zero Parameter");
		} else {
			$i = 1;
			// Generate key and value in separate string
			foreach($param as $key => $value) {
				if ($i == 1) {
					// This is the first params
					$col_name = "{$key}";
					$col_value = "'{$value}'";
					$col_update = "{$key} = '{$value}'";
				} else {
					$col_name .= ",{$key}";
					$col_value .= ",'{$value}'";
					$col_update .= ",{$key} = '{$value}'"; 
				}
				$i++;
			}
			// Concatinate two strings
			if ($dbName) {
				$SQL = "INSERT INTO {$dbName}.{$tableName} ({$col_name}) VALUES({$col_value})";
			} else {
				$SQL = "INSERT INTO {$tableName} ({$col_name}) VALUES({$col_value})";
			}
			if ($dupUpdate) {
				$SQL .= " ON DUPLICATE KEY UPDATE {$col_update}";
			}
		}
		return $SQL;
	}

  	/**
   	 * Extract key-value pairs from an associative array
   	 * and put it in a new associative array
   	 * @param array row an associatve array to be extracted
	 * @return array an associative array containing all parameters
	 */
  	function extractFromRow($row) {
  		if (isset($row) && ($row != "") && (!is_null($row))) {
			foreach($row as $key => $value) {
				$result[$key] = $value;
			}
			return $result;
		} else {
			return null;
		}
	}

	/**
	 * This function checks whether or not a search parameter
	 * has been added. It has two parameters "hasParam" and "where".
	 * When "hasParam" is true, one or more parameter has already
	 * been added. This means the generator has to add a prefix 
	 * "AND" keyword in the generated SQL fragment.
	 * When "where" keyword is not true, the generator adds
	 * "WHERE" keyword.
	 * @param string param the name of the parameter to add
	 * @param mixed value the value of the parameter to add
	 * @param boolean hasParam a boolean variable telling whether a param has been added
	 * @param boolean where a boolean variable telling wheter or not the where keyword has been added
	 * @return string generated SQL fragment
	 */
  	function addSQLParam($param, $value, &$hasParam, &$where, $type = "=", $boolType = " AND ") {
    	$query = " ";
    	if ((($value) && ($value != "")||(($value == "")&&("!=" == $type))) && ($value != "*") || ($value === "0")) {
			if (!$where) {
				$query .= "WHERE";
				$where = true;
			} else if ($hasParam) {
				$query .= $boolType;
			}
			if ("=" == $type) {
				$query .= " {$param} = '{$value}' ";
			} else if ("!=" == $type) {
				$query .= " {$param} <> '{$value}' ";
			} else if ("like" == $type) {
				$query .= " {$param} LIKE '{$value}' ";
			} else if ("like binary" == $type) {
				$query .= " {$param} LIKE BINARY '{$value}' ";
			} else if (">" == $type) {
				$query .= " {$param} > '{$value}' ";
			} else if (">=" == $type) {
				$query .= " {$param} >= '{$value}' ";
			} else if ("<" == $type) {
				$query .= " {$param} < '{$value}' ";
			} else if ("<=" == $type) {
				$query .= " {$param} <= '{$value}' ";
			} else if ("find_in_set" == $type) {
				$query .= " FIND_IN_SET({'$value'}, $param) ";
			}
			$hasParam = true;
    	}
    	return $query;
  	}

	function addSQLParamLike($param, $value) {
    	if (($value) && ($value != "") && ($value != "*")) {
      	$query = " ";
      	$query .= " {$param} LIKE BINARY '%{$value}%'";
    	}
    	return $query;
  	}

	/**
	 * This function handles international names in the following format
	 * lang1:name1\tlang2:name2\tlang3:name3 ...
	 * where \t is the "tab" character
	 * @param string iname is the input string in the above format
	 */
	function inames($iname) {
		$tnames = split("\n", $iname);
		for ($i = 0; $i < sizeof($tnames); $i++) {
			list($iname_code, $iname_value) = split("\t", $tnames[$i]);
			$inames[$iname_code] = $iname_value;
		}
		return $inames;
	}

  	function array_insert(&$array, $insert, $position = -1) {
    	$position = ($position == -1) ? (count($array)) : $position ;
     	if($position != (count($array))) {
        	$ta = $array;
          	for($i = $position; $i < (count($array)); $i++) {
               	if(!isset($array[$i])) {
                    die(print_r($array, 1)."\r\nInvalid array: All keys must be numerical and in sequence.");
               	}
               $tmp[$i+1] = $array[$i];
               unset($ta[$i]);
          	}
          	$ta[$position] = $insert;
          	$array = $ta + $tmp;
          //print_r($array);
     	} else {
        	$array[$position] = $insert;
     	}

     	ksort($array);
     	return true;
  	}
  
}
?>
