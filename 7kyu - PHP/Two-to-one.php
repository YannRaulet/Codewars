<?php

/*
DESCRIPTION:

Take 2 strings s1 and s2 including only letters from ato z. Return a new sorted string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.

Examples:
a = "xyaabbbccccdefww"
b = "xxxxyyyyabklmopq"
longest(a, b) -> "abcdefklmopqwxy"

a = "abcdefghijklmnopqrstuvwxyz"
longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"

*/

function longest($a, $b) {
  $c = str_split($a . $b);
  sort($c);
  $d = "";
  
  for ($i = 0; $i < count($c); $i++) {
    if( $c[$i] != $c[$i+1])
        $d .= $c[$i];
  }
  return($d);
}
