<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if(file_exists($file)){
  // fopen() gives you more control over the file.
  // Modes: r, w, a, x, r+, w+, a+, x+ See below for details
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;

} else{
  $handle = fopen($file,'w');

  $contents = 'William' . PHP_EOL . 'Jestoni' . PHP_EOL . 'Delima' . PHP_EOL . 'Ryan';
  fwrite($handle, $contents);
  fclose($handle);
}