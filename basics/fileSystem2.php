<?php
//file system 2
$file = "textCopy.txt";
//opening a file for reading 
$handle = fopen($file , 'a+'); //r means reading the file and r+ means reading and writing into the file
// but usign the r+ will overwrite the current content and to overcome this a+ used 

//reading a file 
// echo fread($handle,filesize($file)); //params as filename and file size we want read
// echo fread($handle,200); // here we reading only 200 bytes of the file 

//reading a single line 
// echo fgets($handle); 
// echo fgets($handle); 

// //reading a single character
// echo fgetc($handle); //reads a single character

//writing into the file 
// fwrite($handle , "\nEvrything Is Hand Written");
fclose($handle); // better to always close file
//copying a file 
copy($file , 'copiedfile.txt');
$file2 = 'copiedfile.txt';
//deleting the file 
unlink($file2);

?>