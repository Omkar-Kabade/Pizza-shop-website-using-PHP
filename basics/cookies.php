<?php 
// cookies are opposite of sessions 
// using cookies data is stored on users computer 
//session 
if(isset($_POST['submit'])){
    //setting up a cookie
    setcookie('gender',$_POST['gender'],time() + 86400); //params as (cookie name , value for cookie , time of expiry of cookie)


    session_start();
    $_SESSION['name']=$_POST['name'];
    header("Location:ternary.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" name="name">

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>