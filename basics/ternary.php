<?php 
// does the same operation as if else 
$score = 40;
$val = $score >60 ? 'High Score:) ' : 'Low Score :(';
echo $val;

session_start(); // accessing session
// $_SESSION['name']='Namo'; // we can overwrite the mentioned session name by passing values in such way

// deleting a session
if ($_SERVER['QUERY_STRING']=='boom'){
    // unset($_SESSION['name']);
    session_unset();
}
    $name = $_SESSION['name'] ?? "This's Done Using Null Coalescing"; // ?? means null coalescing  use to run default provided value,
                                        // if actual value is unsetted
//get cookie
$gender = $_COOKIE['gender'] ?? 'Unknown'; // null coalescing used here as well

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
    <h4><?php echo $name?></h4>
    <span>(<?php echo $gender?>)</span>

</body>
</html>