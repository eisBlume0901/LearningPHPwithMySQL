<?php

// Array functions
$fruits = ['apple', 'orange', 'pear'];

// count() - gets the length of the array
echo count($fruits) . '<br>'; // 3

// in_array() - checks if the value is within the array
echo in_array('apple',$fruits) . '<br>'; // Returns 1 which means true

// adding an element from an array
// Version 1
// Syntax: nameOfTheArray[] = value;
$fruits[] = 'grapes';
print_r($fruits); // Array ( [0] => apple [1] => orange [2] => pear [3] => grapes )
echo '<br>';

// Version 2
// array_push
// kinda the same with JavaScript which pushes new value in an array like a stack in Java
array_push($fruits, 'strawberry'); // Array ( [0] => apple [1] => orange [2] => pear [3] => grapes [4] => strawberry )
print_r($fruits);
echo '<br>';

// Version 3
// array_unshift
// adds the new element at index 0 or at first element
array_unshift($fruits, 'mango');
print_r($fruits); // Array ( [0] => mango [1] => apple [2] => orange [3] => pear [4] => grapes [5] => strawberry )
echo '<br>';


// removing an element from an array
// Version 1
// array_pop()
// removes the last element or index.length - 1
array_pop($fruits);
print_r($fruits); // Array ( [0] => mango [1] => apple [2] => orange [3] => pear [4] => grapes )
echo '<br>';

// Version 2
// array_shift()
// removes the first element or index 0
array_shift($fruits);
print_r($fruits); // Array ( [0] => apple [1] => orange [2] => pear [3] => grapes )
echo '<br>';

// Version 3
// unset()
// removes an element at specified index
unset($fruits[2]);
print_r($fruits); // Array ( [0] => apple [1] => orange [3] => grapes )
echo '<br>';


// split() - splitting elements into specified number
$chunkedArray = array_chunk($fruits, 2);
print_r($chunkedArray);
echo '<br>';
// Array (
// [0] => Array ([0] => apple [1] => orange )
// [1] => Array ( [0] => grapes )
// )

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$chunkedArray3 = array_chunk($numbers, 5);
print_r($chunkedArray3);
echo '<br>';
// Array (
// [0] => Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
// [1] => Array ( [0] => 6 [1] => 7 [2] => 8 [3] => 9 ) )


// merging two arrays into one
// Version 1
// merge() function
$arr1 = [1, 2, 3, 4];
$arr2 = [5, 6, 7];

$mergedArray = array_merge($arr1, $arr2);
print_r($mergedArray); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 )
echo '<br>';

// Version 2
// [...$arr1, ...$arr2] spread separator
$mergedArray2 = [...$arr1, ...$arr2];
print_r($mergedArray2); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 )
echo '<br>';


// array_combine() - key value pair it is like hashmap in Java
$colors1 = ['red', 'orange', 'yellow'];
$fruits1 = ['apple', 'orange', 'mango'];
$combinedArray = array_combine($colors1, $fruits);
print_r($combinedArray); // Array ( [red] => apple [orange] => orange [yellow] => grapes )
echo '<br>';

// retrieving keys
$keys = array_keys($combinedArray);
print_r($keys); // Array ( [0] => red [1] => orange [2] => yellow )
echo '<br>';

// retrieving values
$values = array_values($combinedArray);
print_r($values); // Array ( [0] => apple [1] => orange [2] => grapes )
echo '<br>';

// array_flip() - flipping existing combined array (hashmap)
$flippedArray = array_flip($combinedArray);
print_r($flippedArray); // Array ( [apple] => red [orange] => orange [grapes] => yellow )
echo '<br>';


// range() - creating a ranged value from the specified start and end
$numbersFrom1To20 = range(1, 5);
print_r($numbersFrom1To20); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
echo '<br>';


// array_map() converts/transforms the array elements into different type and value
/*
 * Counterpart in Java:
 * list.stream().map(parameters -> expression).collect(Collectors.toList())
 */
$evenNumbers = array_map(function($number) {
    return $number * 2;
}, $numbersFrom1To20);
print_r($evenNumbers); // Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
echo '<br>';


// array_filter() filters the array elements with the specified condition
/*
 * Counterpart in Java:
 * list.stream().filter(parameter -> expression).collect(Collectors.toList());
 */
$lessThan10 = array_filter($numbersFrom1To20, fn($number) => $number < 10);
print_r($lessThan10);
echo '<br>';

// array_reduce() reduce the array element into one value
$sumOfEvenNumbers = array_reduce($lessThan10, fn($carry, $number) => $carry + $number);
print_r($sumOfEvenNumbers);
echo '<br>';