<?php

$str = "acdaa";

$chekcStatus = checkPalindrome($str);

echo $chekcStatus;

function checkPalindrome($inputString) {
	$strLen = strlen($inputString);
	$newStr = "";
	for ($i=$strLen-1; $i>=0; $i--)
	{
		$newStr = $newStr . $inputString[$i];
	}
	
	return ($inputString == $newStr ? true : false);
}
