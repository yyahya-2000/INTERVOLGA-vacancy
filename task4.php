<?php
$a = [1, 1, 2, 3, 4 -51, 12, 12, 12, -51];

$countPair = 0;
for ($i = 1; $i < sizeof($a); $i++) 
	if ($a[$i] == $a[$i - 1])
		$countPair++;

/*
// for non-intersecting pairs
$countPair = 0;
for ($i = 1; $i < sizeof($a); $i++) 
	if ($a[$i] == $a[$i - 1]){
		$countPair++;
  $i++;
 }
 */

echo "the number of pairs is: $countPair.";
?>