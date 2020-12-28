<?php

echo addTwoDigits(99);

function addTwoDigits($n) {
    $a = $n % 10;
    $b = floor($n/10);

    return $a+$b;
}
