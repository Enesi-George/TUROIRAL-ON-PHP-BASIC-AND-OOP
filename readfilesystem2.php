<?php
//file system - part 2
  $file = 'quote.txt';  

  //opening a file for reading
  // $handle = fopen($file, 'r+');
  
  
  //read the file
  //echo fread($handle, filesize($file)); read all file
  //echo fread($handle, 139);

  //read a single line
//   echo fgets($handle);
//   echo fgets($handle); 

  //read a single character
//   echo fgetc($handle);
//   echo fgetc($handle);
//   echo fgetc($handle);
//   echo fgetc($handle);


  //write to a file
  //to write to the end of the script file
  $handle = fopen($file, 'a+');

  fwrite($handle, "\nend of task")



?>