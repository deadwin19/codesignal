<?php

echo seatsInTheater(13,6,8,3);

function seatsInTheater($nCols, $nRows, $col, $row) {
	return ($nCols - $col +1) * ($nRows-$row);
}

