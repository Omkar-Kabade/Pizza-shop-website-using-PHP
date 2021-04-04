<?php
   //for loop
//    for($i=0;$i<5;$i++){
//         echo $student[$i];
//     }
    //if we  know length of array we use for loop
    $student = ['name'=>'Omkar','Standard'=>'8th','percentage'=>'94%'];
    // for($i=0;$i<count($student);$i++){
    //     echo $student[$i];
    // }
    //if we dont know length of array we use for each
    $blogs=[['title'=>'money heist','ott'=>'netflix','date'=>'feb_2020'],
    ['title'=>'Sacred Games','ott'=>'netflix','date'=>'sept_2019'],
    ['title'=>'Four more shots please','ott'=>'prime','date'=>'nov_2018']
    ];
//     foreach($blogs as $blog){
//         echo $blog['title'] . ' on ' . $blog['ott']. ' date released '. $blog['date'];
//         echo '</br>';
//     }

//while loop
    $i=0;
    while($i<count($blogs)){
        echo $blogs[$i]['title'];
        echo '<br/>';
        $i++;
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
     <h1>Web Series</h1>
     <ul>
        <?php foreach($blogs as $blog){ ?>
            <h3><?php echo $blog['title'] ?></h3>
            <p>Released On - <?php echo $blog['ott'] ?></p>
            <p>Date Released - <?php echo $blog['date'] ?></p>
        <?php } ?>
     </ul>
 </body>
 </html>