<?php
  echo 'Hello', ' eisBlume0', 901; // System.out.println in Java
// Add a closing tag if you are going to put an HTML

// print_r, var_dump(), var_export() commonly used for debugging
// print_r is used in array. Arrays are perfectly suited to print_r
// and not to echo because it would cause an error
print_r([1, 2, 3]);

// var_dump returns the datatype, length, and value
var_dump('Hello');
var_dump(5);
var_dump(true);

// var_export returns the formatted input
var_export("Hello, World");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- the php echo and the ?= has the same functionality, the ?= is just cleaner-->
<h1 style="color: blue; font-family: Arial"><?php echo 'Maria'; ?></h1>
<h1 style="color: skyblue; font-family: 'Lucida Bright'"><?='Maria'; ?></h1>
</body>
</html>
