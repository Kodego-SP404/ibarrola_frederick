<?php
/*----- String Functions ----*/
/*Functions to work with strings
https:/ /www.php.net/manual/en/ref.strings.php
*/
$string =  'Hello World';

// Get the length of a string
echo strlen($string);
echo "<br>";

// Find the position of the first occurrence of a substring in a string
echo strpos($string, '0');
echo "<br>";

// Find the position of the first occurrence of a substring in a string
echo strpos($string, '0');
echo "<br>";

// Reverse a stringecho strrev($string);
echo "<br>";

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo "<br>";
echo substr($string, 5);
echo "<br>";

// Starts with
if (str_starts_with($string, ' Hello')) {
    echo 'YES';
}
echo "<br>"


// Ends with
// if (str_ends_with($string, 'Id')) {
//     echo 'YES';
// }
// echo "<br>"

// HTML Entities
// $string3 = '<h1>Hello</h1>';
// echo $string3;
// $string2 = '<h1>Hello World</h1>';
// echo htmlentities($string2);
// echo "<br>";

// Formatted Strings -useful when you have outside data
// Different specifiers for different data types
// printf( is a Xs•, 'Ryan', 'nice guy');
// printf(1+ 1 = %f', 1 + 1); // float








