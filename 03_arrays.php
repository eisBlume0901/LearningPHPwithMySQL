<?php

// Creating array
// Version 1 - same with JavaScript or Python
$evenNumbers = [2, 4, 6, 8];
print_r($evenNumbers);
var_dump($evenNumbers);

// Version 2 - declaring array
$fruits = array('apple', 'orange', 'banana', 'pear');
print_r($fruits);
var_dump($fruits);

// Accessing specific element index-based
echo $fruits[1]; // Orange

// Associative array, can set number indices (like a hashmap)
// Can be used for database in tabular format
$colors = [
    1 => 'red',
    9 => 'blue',
    8 => 'orange'
];

echo $colors[9]; // Blue

$hex = [
    'red' => '#FF0000',
    'green' => '#00FF00',
    'blue' => '#0000FF'
];

echo $hex['blue']; // #OOOOFF

// Example of using associative array for database purposes
$emerald = [
  'first_name' => 'Emerald',
    'last_name' => 'Greenleaf',
    'email' => 'emeraldgreenleaf@tech.com'
];

echo $emerald['email']; // emeraldgreenleaf@tech.com

// Multidimensional Array
$devs = [
    [
        // 0
        'name' => 'Emerald Greenleaf',
        'email' => 'emeraldgreenleaf@tech.com'
    ],
    [
        // 1
        'name' => 'Amelia Watson',
        'email' => 'ameliawatson@tech.com'
    ],
    [
        // 1
        'name' => 'Marie Claire Adair',
        'email' => 'marieclaireadair@tech.com'
    ]
];

// Accessing specific element in a multi-dimensional array
// Specify index and key to get the value
echo $devs[2]['email']; //marieclaireadair@tech.com

// Converting multidimensional array to json
// encode = array to json object
// decode = json object to array
var_dump(json_encode($devs));
