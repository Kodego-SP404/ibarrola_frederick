<?php
/*--------Array Functions ----------*/
/* Functions to work with arrays
https : // www. php . net/manual/en/ref.array.php
*/

// $fruits = ['apple', 'banana', 'orange'];

//Get array length
// echo count($fruits);

// $fruits[] = 'grape'; //add to the end
// array_push($fruits, 'mango',' raspberry'//add to the end using push
// array_unshift($fruits, 'kiwi'); //adds to the beginning
// print_r($fruits);

//remove specific element
// unset($fruits[2]); //remove orange
// print_r($fruits);

// split into chunks of 2
// $chunkedArray= array_chunk($fruits, 2);
// print_r($chunkedArray);

//Concatenate arrays
// $arrl = [1,2,3];
// $arr2 = [4,5,6];
// $arr3 =array_merge($arrl,$arr2);
//print_r($arr3);
//$arr4 = [...$arrl,. .$arr2];
// print_r($arr4);

//Combine arrays (Keys and values)
// $a = ['green', 'red' , 'yellow' ] ;
// $b=  ['avocado',' apple', 'banana'];
// $c = array_combine($a, $b);
// print_r($c);


// Array of keys
//$keys = array_keys($c);
//print_r($keys);

//F1ip keys with values
// $flipped =array_flip($c);
// print_r($flipped);

//Create array of numbers with range
// $numbers =
// print_r($numbers);

//Map through array and create a new one

// $newNumbers = array_map(function ($number){
//     return "Number $number"
//     $numbers);
//     print_r($newNumbers ) ;

    // Filter array
    // $1essThanS = array_filter($numbers, fn($number) $number S);
    // print_r($1essThanS);

    //Array reduce
    //carry holds the return value of the previous iteration
    // $sum = array_reduce($numbers, fn($carry, $number) $carry + $number);
    // print_r($sum);



