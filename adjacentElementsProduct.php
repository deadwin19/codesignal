<?php

$inputArray = [5, 1, 2, 3, 1, 4];

$maxProduct = adjacentElementsProduct($inputArray);

echo $maxProduct;

function adjacentElementsProduct($inputArray) {
	
	$productArrya = [];
	$countArray = count($inputArray);
	$j = 0;
	
	for ($i = 0; $i < $countArray ; $i++)
	{
		$productArrya[$j] = (int)$inputArray[$i] * (int)$inputArray [$i+1];
		$j +=1;
	}
	
	rsort($productArrya);	
	return $productArrya[0] == 0 ? $productArrya[1] : $productArrya[0];
}

