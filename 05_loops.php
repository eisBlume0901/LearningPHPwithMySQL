<?php


// Looping
// Version 1 - for loop
for ($x = 1; $x <= 5; $x++)
{
    echo $x; // 12345
}
// Version 2 - for-each loop - can be used for arrays, mostly used in database
$posts = ['#Clean&Green', '#ThinkBeforeYouClick', '#Meet&Greet'];

// Comparing for loop and for each
// For for loop, use the array function count()
for ($n = 0; $n < count($posts); $n++) {
    echo $posts[$n] . '<br>';
}

//For for each loop
foreach($posts as $post) {
    echo $post;
}

    // Accessing index using foreach
    foreach($posts as $index => $post) {
        echo $index + 1 . ' - ' . $post . '<br>';
    }

    // Using for each loop for associative array
    $emerald = [
        'firstName' => 'Emerald',
        'lastName' => 'Greenleaf',
        'email' => 'emeraldgreenleaf@quantumtech.com'
    ];

    foreach($emerald as $key => $value) {
        echo "$key - $value<br>";
    }

// Version 1 - while loop
$y = 5;
while ($y < 10) {
    echo 'Number ' . $y . '<br>';
    $y++;
}

$z = 1;
// Version 1 - do while loop
do {
    echo 'Number ' . $z . '<br>';
    $z++;
}
while ($z <= 10);