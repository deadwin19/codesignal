<?php

$testArray = [1, 3, 2];
echo (boolean)almostIncreasingSequence($testArray);

function almostIncreasingSequence($sequence) {
	
	$invalidItemsCount = 0;
	
	for ($i = 1; $i< count($sequence) ; $i++)
	{
		if ($sequence[$i] <= $sequence[$i-1]) 
		{
			$invalidItemsCount += 1;
			if ($invalidItemsCount > 1) return false;
			if ($sequence[$i] <= $sequence[$i-2] && $sequence[$i+1] <= $sequence[$i-1]) return false;
		}
	}
	return true;
}


