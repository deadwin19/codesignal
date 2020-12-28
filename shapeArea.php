<?php

$polygon = 3;
$polygonArea = shapeArea($polygon);

echo $polygonArea; 

function shapeArea($n) {
	
	$area = 1;
	
	for ($i = 0; $i<$n ; $i++)
	{
		$area = $area + (4*$i);
	}
	return $area;
}

