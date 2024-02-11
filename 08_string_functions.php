<?php
//       0123456789...and so forth with $name[0] = 'E'
$name = 'Emerald dendron greenleaf';
echo $name[0] . '<br>'; // E

// strlen() - length of a string
echo strlen($name) . '<br>'; // 25

// strpos() - first occurence of the specified substring/character in a string
echo strpos($name, 'd') . '<br>'; // 6
echo $name[6] . '<br>'; // d

// strpos() - last occurence of the specified substring/character in a string
echo strrpos($name, 'd') . '<br>'; // 11
echo $name[11] . '<br>'; // d

// strrev() - reverse a string
echo strrev($name) . '<br>'; // ffaelneerg nordned dlaremE

// strlolower() - converts all characters into lowercase
echo strtolower($name) . '<br>'; // emerald dendron greenleaf

// strtoupper() - converts all characters into uppercase
echo strtoupper($name) . '<br>'; // EMERALD DENDRON GREENLEAF

// ucwords() - uppercase the first character of each word
echo ucwords($name) . '<br>'; // Emerald Dendron Greenleaf

// str_replace('originalStr', 'newStr', $variable) - returns a new string with the replaced word;
echo str_replace('dendron', "", $name) . '<br>'; // Emerald greenleaf

// substr(offset, length) - starting and how long the substring
echo substr($name, 0, 6) . '<br>';

// substr(offset) - starting from the offset up to the string's length
echo substr($name, 7) . '<br>'; // dendron greenleaf

// str_starts_with($variable, 'stringTobeSearched');

// Note it is always case-sensitive
var_dump(str_starts_with($name, 'Emerald')); // bool(true)
var_dump(str_ends_with($name, 'greenleaf')); //  bool(true)


// With HTML, JavaScript
$h1HTML = '<h1>Hello, World</h1>'; // parses it to HTML attribute
echo $h1HTML;

//$alertJS = '<script>prompt()</script>'; // parses it to JS function
//echo $alertJS;

// htmlspecialchars() - converts HTML and JavaScript
// commonly used in forms
echo htmlspecialchars($h1HTML); // <h1>Hello, World</h1>

// printf() - formatting string
// same with Python
// https://www.w3schools.com/PHP/func_string_printf.asp
printf('%s likes to %s', 'Emerald', 'code'); // Emerald likes to code
printf('1+1=%d', 1+1); // 1+1=2