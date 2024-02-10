<?php

/*
 * == Equal to / != Not Equal to
 * === Identical to / !== Not Identical to
 */

$age = 20;

if ($age >= 18) {
    echo ' You are eligible to vote';
}
else
{
    echo ' Sorry, you are not eligible to vote';
}

// Date Libraries
echo date('Y'); // Y = Year, 2024
echo date('M'); // M = Month, Feb
echo date ('D'); // D = Day, Sat
echo date ('j'); // j = Day of the Month, 10 derived from Feb 10, 2024

$hourTime = 15;

if ($hourTime < 12)
    echo ' Good morning'; // Curly brackets can be omitted
else if ($hourTime < 17)
{
    echo ' Good afternoon';
}
else
{
    echo ' Good evening';
}

$posts = ['First Post'];


// Array functions empty()
if (!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No posts';
}

$posts = []; // It is top-down approach. Variables assigned to another value would be overriden

// Ternary Expression
echo !empty($posts) ? $posts[0] : 'No posts';

$posts = ['There is a post'];

// Coalesce Expression
$firstPost = $posts[0] ?? null;