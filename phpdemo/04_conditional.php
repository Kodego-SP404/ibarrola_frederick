<?php
/* ---- Conditionals & Operators ---- * /
/* ---- Operators ---- * /
/*
< Less than
> Greater than 
<= Less than or equal to  
>= Greater than or equal to 
== Equal to
=== Identical to 
!= Not equal to
!== Not identical to
*/

/*------------------If & If-Else Statements ------------*/
/*if Statement Synrtax  
* if (conditions) { 
     //  code to be executed is true 
     * }
     *  */
    //age = 20, lets check if eligible to vote
    // $age= 20
    // if ($age >= 18) {
       // echo 'You are old enough to  vote (18)'
    //    $age= 17;
    //    if ($age >= 18) {
    //     echo' you are old enough to vote!';
    //    } else{
    //     echo 'Sorry, you are not eligible to vote!';
    //    }

    // 1-12: morning; 13-17 afternoon; 18 evening
    // $t = date('H');
    // echo $t;

    // if ($t = date('H');
    // echo $t;

    // if ($t <= 12) {
    //     echo 'Have a great morning! ';
    // } elseif ($t <=17) {
    //     echo 'Have a great morning! ';
    // } else {
    //     echo 'Have a great morning! ';
    // }

    $posts = [];

    // if(!empty($posts[0])){
    //     echo $posts[0];
    // } else {
    //     echo ' There are no posts';
    // }

    //Teranary Operator

    /*
    The ternary operator is a shorthand if statement
    Ternary Syntax:
    condition ? true : false;
    */

    // $firstPost = !empty($posts) ? $sports[0] : null;
    // echo $firstPost;

    //Switch statements
    $favcolor = 'maroon';

    switch ($favcolor) {
        case 'red':
            echo ' Your favorite color is red!';
             break;
             default:
             echo ' Your favorite colors is neither red, green nor blue';
        }
    }



