<?php

/*
DESCRIPTION:

What is an anagram? Well, two words are anagrams of each other if they both contain the same letters. For example:

'abba' & 'baab' == true
'abba' & 'bbaa' == true
'abba' & 'abbba' == false

'abba' & 'abca' == false
Write a function that will find all the anagrams of a word from a list. You will be given two inputs a word and an array with words. You should return an array of all the anagrams or an empty array if there are none. For example:

anagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']) => ['aabb', 'bbaa']
anagrams('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']) => ['carer', 'racer']
anagrams('laser', ['lazing', 'lazy',  'lacer']) => []

*/

function anagrams(string $word, array $words): array { 
  $result = [];
  $str = str_split($word);
  sort($str);

  for ($i = 0; $i < count($words);$i++) {
    // Convert each string of $words to an array
    $sortWords = str_split($words[$i]);
    sort($sortWords);
    if ($str === $sortWords) 
      array_push($result,$words[$i]);
  }
  return($result);
}
