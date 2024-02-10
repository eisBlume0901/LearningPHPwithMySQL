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
 * anonymous
 */
function registerUser($email) { // $email is the parameter
    echo $email .' registered';
}

$emeraldEmail = 'emeraldgreenleaf@quantumtech.com';

registerUser($emeraldEmail); // Call the function to run the code inside
// $emeraldEmail is the argument

// Return vs Void vs Default vs Anonymous
// Return
function sum($n1, $n2) {
    return $n1 + $n2;
}
echo sum(5, 10);
$total = sum(23, 10);
echo $total;
// Void
function subtract($n1, $n2) {
    echo $n1 - $n2;
}
subtract(10, 4);

// Default
function multiply($n1 = 0, $n2 = 0) {
    return $n1 * $n2;
}
echo multiply(); // 0
echo multiply(2, 5);

// Anonymous