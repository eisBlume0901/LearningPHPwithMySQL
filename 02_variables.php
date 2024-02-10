<?php

// Variables must be prefixed with $
// Variables must start with a letter or underscore character

$name = "Maria "; // String
$age = 19; // Integer
$isStudent = true; // Boolean
$grade = 95.60;

// Concatenation
// Version 1 uses dot
echo 'Name: ' . $name . 'Age: ' . $age . 'A student? ' . $isStudent . 'Grade: ' . $grade;

// Version 2 uses double quotation with $variables inside of it
echo "$name has a grade of $grade in her Math class";

// Version 3 - Same with version 2 but added curly brackets to emphasize the variable
echo "${name} is ${age} years old";

// Unlike Java, JavaScript, or Python, a number wrapped in quotations are recognized as
// integer or float.

$sum = '5' + 6;
echo $sum; // Expected output is 10
var_dump($sum);


// Constant variables - use them for database credentials
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
echo DB_NAME;