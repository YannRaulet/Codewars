<?php

/*
DESCRIPTION:

Write a function that when given a number >= 0, returns an Array of ascending length subarrays.

pyramid(0) => [ ]
pyramid(1) => [ [1] ]
pyramid(2) => [ [1], [1, 1] ]
pyramid(3) => [ [1], [1, 1], [1, 1, 1] ]
Note: the subarrays should be filled with 1s

*/

function pyramid($n) {
  $result = [];
  $littleArray = [];
  for ($i=0;$i < $n; $i++){
    for ($j = 0; $j <= $i; $j++){
      $littleArray[] = 1;
    }
    $result[] = $littleArray;
    $littleArray = [];
  }
  return $result;
}
