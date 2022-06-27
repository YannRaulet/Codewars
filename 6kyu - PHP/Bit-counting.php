<?php

/*
DESCRIPTION:

Write a function that takes an integer as input, and returns the number of bits that are equal to one in the binary representation of that number. You can guarantee that input is non-negative.

Example: The binary representation of 1234 is 10011010010, so the function should return 5 in this case
*/

function countBits($n) 
{
  //decbin — Decimal to binary
  $bit = str_split(strval(decbin($n)));
  $sum = 0;
  foreach($bit as $value)
  { 
    if($value == 1)
      $sum ++;
  }
  return($sum);
}
