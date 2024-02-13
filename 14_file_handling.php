<?php

/*
 * File handling
 *  - is the process of creating, updating, reading, and deleting files.
 *
 */

$fileDirectory = 'redirectFolder/users.txt';

if (file_exists($fileDirectory)) {
//    echo readFile($fileDirectory) . '<br>'; // readFile() is not that flexible

    $handle = fopen($fileDirectory, 'r');
    // fopen() function opens a file or URL
    // r means read
    $contents = fread($handle, filesize($fileDirectory)); // fread() function reads from an open file
    fclose($handle); // fclose() function closes an open file pointer
    echo $contents;
} else {

    // For this to work, delete the text file first
    // It really does automatically create a new file and set the contents inside
    $handle = fopen($fileDirectory, 'w');
    // fopen() function opens a file or URL
    // w means write
    $contents = 'Emerald' . PHP_EOL . 'Eisblume' .  PHP_EOL . 'Eisblume0901';
    // PHP_EOL is a predefined constant in PHP, which means End Of Line
    fwrite($handle, $contents);
    fclose($handle);
}