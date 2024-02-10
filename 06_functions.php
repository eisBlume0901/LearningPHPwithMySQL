<?php

/*
 * Declaring function in PHP has the same syntax with JavaScript
 *
 * Differentiate function vs global scope
 * Function scope - variables declared inside the function cannot be accessed
 * by other functions or within the script. Furthermore, function is a reusable
 * block of code that performs a specific task and can be called many times.
 * Global scope - accessible from anywhere in the script
 *
 * Differentiate parameter vs argument
 * Parameter - variable declared in a function definition
 * Argument - actual value passed to the function when it is called
 *
 * Differentiate return vs void function
 * return - gives a value that is being declared in the function,
 * for instance, integer, String, or float.
 * void - does not return any value
 * default - you give a default value so that if you forgot to put
 * an argument into your function, it would use the default value declared
 * in a parameter
 * anonymous - it is not a named function like function calculateArea() -
 * calculateArea() is the name of the function
 *  Java also have this implementation
 * arrow -
 *  Java also have this implementation, but it is called lambda expression
 */
function registerUser($email) { // $email is the parameter
    echo $email .' registered' . '<br>';
}

$emeraldEmail = 'emeraldgreenleaf@quantumtech.com';

registerUser($emeraldEmail); // Call the function to run the code inside
// $emeraldEmail is the argument

// Return vs Void vs Default vs Anonymous
// Return
function sum($n1, $n2) {
    return $n1 + $n2 . '<br>';
}
echo sum(5, 10); // 15
$total = sum(23, 10);
echo $total; // 33

// Void
function subtract($n1, $n2) {
    echo $n1 - $n2 . '<br>';
}
subtract(10, 4); // 6

// Default
function multiply($n1 = 0, $n2 = 0) {
    return $n1 * $n2 . '<br>';
}
echo multiply(); // 0
echo multiply(2, 5); // 10

// Anonymous
$quotient = function($n1, $n2) {
    return $n1 / $n2 . '<br>';
};
echo $quotient(24, 6); // 4

// Arrow
$areaOfCircle = fn($radius) => $radius * $radius * 3.14;
echo $areaOfCircle(4); // 50.24