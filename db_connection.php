<?php
//two approaches to connect database mysqli and pdo 

//connecting to database using mysqli
$conn = mysqli_connect('localhost','test','test123','pizza_bae_shop'); //parameters it takes (host,username,password,dbname)

//checking db connection 
if(!$conn){
    echo 'Connection Error : '. mysqli_connect_error(); //echos the exact error
}
?>