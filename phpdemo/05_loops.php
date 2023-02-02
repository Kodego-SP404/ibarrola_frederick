<?php
/*---------------Loops & Iteration----------*/
/*---------------For Loops----------*/
/*
** For Loop Syntax
for (initialize; condition; increment) {
    // code to be executed
}
*///
//  for ($x = 0; $x <x <= 10 ; $x++) { 
//     echo "Number:  $x <br>";
//  }
    /*-------While Loop-------*/
    /*
    ** While Loop Syntax while (condition) {
        // code to be executed
    }
    */


    //$x = 1;
    // while ($x <= 10) {
    //     echo "Number: $x <br>";
    //     $x++;
    // }
    
    /*--------Do While Loop----------*/
    /**
     * 
     * • Do While Loop Syntax
    // code to be executed }
    //    *while (condition);
    //    *
    //    * 
    //    * do... while loop will always execute the block of code once, even if the
    //    conditionis false.


        do {
        echo "Number: $x <br>";
        $x++;
         } while ($x l0);

         /* ---------- Foreach Loop ---------- */

            /*
            ** Foreach Loop Syntax
            foreach ($array as $value) {
            // code to be executed
            }
            */

            //$posts = ['First Post', 'Second Post', Third Post'];
            //for ($x = 0; < count ($psots); $x++) {
             //   echo"$posts[$x] <br>";
            // }

            //Associative Array
            $person = [
                'fisrt_name' => 'ERIC',
                'last_name' => 'IBARROLA',
                'Email' => 'frederick@gmail.com'
            ];

            //Get Keys
            foreach ($person as $key => $val) {
                echo "$Key - $val <br>";
            }
            
