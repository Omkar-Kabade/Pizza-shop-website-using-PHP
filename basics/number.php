<?php
    //basic operation such as + , - ,* , / **
    $radius = 11;
    $pi = 3.14;
    echo $pi * $radius ** 2;

    //bodmas rule
    echo '<-   -> '; 
    echo 3 * (4+7) /4;

    //increment decrement
    echo '<-   -> '; 

    echo $radius++; //it wont print 26 here
    echo $radius; //it will print 26 here 
    //same for decremment

    $a=10;
    //$a=$a +20;
    $a+=20; //shorthand
    echo '<-   -> '; 
    echo $a;
    echo '<-   -> '; 
    echo $a*2;
    echo '<-   -> '; 

    //some build-in functions
    echo floor($pi); //outputs the lower value
    echo '<-   -> '; 
    echo ceil($pi); //outputs higher value
    echo '<-   -> '; 
    echo pi();
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>