<?php

/*
 * == Equal to / != Not Equal to
 * === Identical to / !== Not Identical to
 */

$age = 20;

if ($age >= 18)
{
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


// If else
// Version 1 - If else statement
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
if (!empty($posts))
{
    echo $posts[0];
}
else
{
    echo 'No posts';
}

// Version 2 - Ternary Expression
$posts = []; // It is top-down approach.
// Variables assigned to another value would be overridden
echo !empty($posts) ? $posts[0] : 'No posts';

// Version 3 - Coalesce Expression
$posts = ['There is a post'];
$firstPost = $posts[0] ?? null;
echo $firstPost;

// Version 4 - Switch case statement

$favColor = 'blue';

switch ($favColor) {
    case 'red':
        echo ' Your favorite color is red';
        break;
    case 'blue':
        echo ' Your favorite color is blue';
        break;
    case 'green':
        echo ' Your favorite color is green';
        break;
    default:
        echo ' Your favorite color is not red, green, or blue';
        break;
}