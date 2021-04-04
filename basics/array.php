<?php
                        //indexed array

// $gang=['omi','nami','vibe','ravbeta'];
// echo 'indexed arrays';
// echo $gang[2];
// $gang[2]='jakitri';
// echo $gang[2]; //updating values on particular index

// $fam =array('mario','luigi','pepatua'); //other way

// $age=array(20,30,40,50,10);
// print_r($age); //print_r means print readable

// $age[2]=45;
// print_r($age);

// $age[]=11; //adding values at end of the array
// print_r($age);

// array_push($age,21);
// print_r($age); //other way adding element at end

// echo count($age); //finding length of arrays

// //merging arrays
// $mine= array_merge($gang,$fam);
// print_r($mine);



                       //associative arrays (key and value pairs)

// $student = ['name'=>'Omkar','Standard'=>'8th','percentage'=>'94%'];
// print_r($student);
// echo $student['name'];

// //adding new element to assosiative array we can overwrite them too
// $student['next_std']='Xth';
// print_r($student);
// echo count($student);

                        //multidimensional arrays
    //multidimensional indexed array
    $blogs=[['money heist','netflix','feb_2020'],
            ['Sacred Games','netflix','sept_2019'],
            ['Four more shots please','prime','nov_2018']
            ];
    // print_r($blogs); //prints whole multidimensional array
    // echo $blogs[1][1];
    // print_r( $blogs[2]);
    
    //multidimensional assosiative array
    $blogs2=[['title'=>'money heist','ott'=>'netflix','date'=>'feb_2020'],
            ['title'=>'Sacred Games','ott'=>'netflix','date'=>'sept_2019'],
            ['title'=>'Four more shots please','ott'=>'prime','date'=>'nov_2018']
            ];
            print_r($blogs2);   
            echo $blogs2[1]['ott'];
            echo count($blogs2);
            $blogs2[]=['title'=>'family_man','ott'=>'prime','date'=>'mar_2021'];
            print_r($blogs2);
            //popping-out array
            $popped=array_pop($blogs2); //pops the last array or element
            print_r($popped); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
</body>
</html>