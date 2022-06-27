<?php

/*
DESCRIPTION:

Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).

Examples:

solution('abc', 'bc') // returns true
solution('abc', 'd') // returns false

*/
function solution($str, $ending) {
  $sub = substr_compare($str, $ending, -strlen($ending), strlen($ending));

  if ($sub == 0)
    return true;
  else {
    return false;
}
