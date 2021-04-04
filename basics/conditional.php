<?php
    $blogs=[['title'=>'money heist','ott'=>'netflix','date'=>'feb_2020','price'=>43],
    ['title'=>'Sacred Games','ott'=>'netflix','date'=>'sept_2019','price'=>21],
    ['title'=>'Four more shots please','ott'=>'prime','date'=>'nov_2018','price'=>12]
    ];
    //if elseif else
    foreach ($blogs as $blog){
        // if($blog['price']>20){
        //     echo $blog['price'] . '</br>';
        // }
        if($blog['price']>20 || $blog['price']<15){
            echo $blog['price'] . '</br>';
        }

    }
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