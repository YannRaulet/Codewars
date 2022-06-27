<?php

/*
DESCRIPTION:

An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a function that determines whether a string that contains only letters is an isogram. Assume the empty string is an isogram. Ignore letter case.

Example: (Input --> Output)

"Dermatoglyphics" --> true
"aba" --> false
"moOse" --> false (ignore letter case)

*/

function isIsogram($s) {
  $lenght = strlen($s);
  $arr = str_split(strtolower($s));
  $unique = array_unique($arr);

  if ((count($unique) == $lenght) || (empty($s)) )
      return true;
  else
      return false;
}
