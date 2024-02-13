<?php

/*
 * What is exception handling?
 *  is a way of handling errors in a more controlled manner.
 *  it is a way of handling errors that allows your program to continue running
 * even if it encounters an error.
 */

//function inverse($x) {
//    if ($x === 0) {
//        throw new Exception('Division by zero.');
//    }
//    return 1 / $x;
//}
//
//echo inverse(0); // It has an error of Uncaught Exception: Division by zero.
//// because we did not use try-catch block to handle the exception

function inverse1($x) {
    // Try-catch has the same syntax with Java
    try
    {
        if ($x === 0) {
            throw new Exception('Division by zero.');
        }
        return 1 / $x;
    }
    catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}

echo inverse1(0); // It will generate our own error message
