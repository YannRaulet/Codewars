<?php

/*
DESCRIPTION:

Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces.

*/

function getCount($str) {
  $vowelsCount = strlen($str);
  $vowelLetters  = array ("a","e","i","o","u");
  $vowels = 0;
  
  for($i = 0; $i < $vowelsCount; $i++) {
    if (in_array($str[$i], $vowelLetters))
      $vowels++;
  }
  return $vowels;
}
