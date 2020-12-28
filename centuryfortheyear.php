<?php

$century = centuryFromYear(201);
echo $century;

function centuryFromYear($rest) {
	$strLength = strlen($rest);
	$firstChar = "";
	$lastChar = "";
	$intCentury = 0;
	
	if ($strLength == 1 OR $strLength == 2)
	{
		$intCentury = 1;
		return $intCentury;
	}
	elseif($strLength == 3)
	{
		$firstChar = (int) substr($rest, 0,1);
		$lastChar = (int) substr($rest, -1);
		
		if ($lastChar > 0)
		{
			$intCentury = $firstChar + 1;
			return $intCentury;
		}
		else{
			$intCentury = $firstChar;
			return $intCentury;
		}
	}
	elseif($strLength == 4)
	{
		$firstChar = (int) substr($rest, 0,2);
		$lastChar = (int) substr($rest, -2);
		
		if ($lastChar > 0)
		{
			$intCentury = $firstChar + 1;
			return $intCentury;
		}
		else{
			$intCentury = $firstChar;
			return $intCentury;
		}
	}
}
?>