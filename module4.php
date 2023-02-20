<?php
// QUESTION-1 Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
/*function sort_by_length($a, $b) {
    return strlen($a) - strlen($b);
}

$strings = array('abc', 'def', 'ghij', 'klmno', 'pqrstu', 'vwxyz');

usort($strings, 'sort_by_length');

print_r($strings);*/

//-------------------------------------------
// QUESTION-3 :write code of a php function to remove the first and last element from an array and return the remaining elements as a new array
/*function remove_first_and_last($arr) {
    array_shift($arr); 
    array_pop($arr); 
    return $arr; 
  }
$my_array = array('apple', 'banana', 'cherry', 'date', 'elderberry');

$new_array = remove_first_and_last($my_array);

print_r($new_array); // Output: Array ( [0] => banana [1] => cherry [2] => date )*/

//-------------------------------------------------------
//write code of a php function to find the second largest number in an array of numbers

/*function find_second_largest($arr) {
    $largest = $arr[0];
    $second_largest = $arr[0];
  
    for ($i = 1; $i < count($arr); $i++) {
      if ($arr[$i] > $largest) {
        $second_largest = $largest;
        $largest = $arr[$i];
      } elseif ($arr[$i] > $second_largest && $arr[$i] != $largest) {
        $second_largest = $arr[$i];
      }
    }
  
    return $second_largest;
  }
  $my_array = array(5, 7, 2, 8, 4, 3);

$second_largest = find_second_largest($my_array);

echo "The second largest number in the array is: " . $second_largest;*/
//=--------------------------------------------------------

// Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

/*function concatenate($a, $b) {
    return $a . strrev($b);
}

echo concatenate('abc', 'def');*/

//-----------------------------------------------------------

// Write a PHP function to check if a string contains only letters and whitespace.

/*function check_string($string) {
    return ctype_alpha(str_replace(' ', '', $string));
}

echo check_string('abc def') ? 'true' : 'false';

*/

  

  
