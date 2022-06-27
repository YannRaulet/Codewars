<?php

/*
DESCRIPTION:

This time no story, no theory. The examples below show you how to write function accum:

Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"
The parameter of accum is a string which includes only letters from a..z and A..Z.

*/

function accum($s) {
  $array = str_split($s);
  $count = -1; //To avoid repeating the first element of the array

  foreach ($array as $value)
  {
    $count ++;
    $arrNew[] =  strtoupper($value).strtolower(str_repeat($value, $count));
  }

  return implode("-", $arrNew);
}
