<?php 
//file handling using php 

// reading a text file 
// $data = readfile('text.txt');
// echo $data; // at end of it presents number of bytes

//reading files using if else to see whether file exists or not
$file = 'test.txt';
if(file_exists($file)){
    //if exists
    echo readfile($file) . '<br>';

    //copying the file 
    copy($file , 'textCopy.txt');

    // getting the path of the file 
    echo realpath($file) . '<br/>';

    // getting the file size
    echo filesize($file) . '<br/>';

    //getting the file type
    echo filetype($file) . '<br/>';

    //renaming a file
    rename($file,'test.txt');

}else{
    echo 'This File Does Not Exists';
}

//making directory or folder
// mkdir('folderName');
?>