<?php

/*
DESCRIPTION:

Simple, given a string of words, return the length of the shortest word(s).

String will never be empty and you do not need to account for different data types.
*/

function findShort($str){ 
  $array = explode(' ', $str);
  $short = strlen($array[0]);
  foreach($array as $value){
    if(strlen($value) < $short)
      $short = strlen($value);
  }
  return $short;
}
