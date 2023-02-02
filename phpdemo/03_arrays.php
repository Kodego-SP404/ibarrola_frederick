<?php
/* --------------- Arrays ---------------- * /

/* Array hold multiple values. Each value in an array is called"element" * /

//Simple array of numbers
$numbers  =  <div 1,2,3,4,5];
$fruits = [' apple', 'orange', 'banana'];

// echo $numbers(0);
// var_dump($numbers);
// echo $fruits[l);
ecno $numbers[2] + $numbers[3];

//Associative Arrays
/ * Associative arrays allows us to use named keys to identify values * /

$colors = [
  1 => ' red',
  2 => 'green',
  3 => 'blue',
  4 => 'yellow',
];

echo $colors[3]; 

// Strings as keys
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

// echo $hex['red'];
var_dump($hex);


/*Multi-dimensional arrays are often used to store data in a table format.*/

// Single Person
// $person = [
//     'first_name' =>'FREDERICK',
//     'last name' => 'IBARROLA',
//     'email' => ' frederick@gmail.com'
// ];

// echo $person['first_name'];

// //MultidimensionaI array
// $people = [
//     [
//         'first_name' =>'FREDERICK',
//         'last name' => 'IBARROLA',
//          'email' => ' frederick@gmail.com',

//     ],
//     [
//         'first_name' =>'FREDERICK',
//         'last name' => 'IBARROLA',
//          'email' => ' frederick@gmail.com',
//     ],
//     [
//         'first_name' =>'FREDERICK',
//         'last name' => 'IBARROLA',
//          'email' => ' frederick@gmail.com',
//     ]
// ]

// echo $people[2]['last_name'];

//Encode to JSON
// var_dump(json_encode($people));

// //DEcode to JSON
// var_dump((json_encode($people)));

// //Decode to JSON
// $jsonobj = '"first_name":"FREDERICK","last_name":"IBARROLA", "EMAIL":"frederick@gmail.com"}'
// var_dump(json_decode($jsonobj)),
