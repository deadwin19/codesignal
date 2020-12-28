<?php

$currentStatues = [6, 2, 3, 8];
$newStatues = makeArrayConsecutive2($currentStatues);

echo $newStatues;

function makeArrayConsecutive2($statues) {
	rsort($statues);
	$countArray = count($statues);
	$additionalStatues = 0;
	
	for ($i=0; $i < $countArray-1; $i++)
	{
		$additionalStatues = $additionalStatues + ($statues[$i] - $statues[$i+1] - 1);
	}
	return $additionalStatues;
}
