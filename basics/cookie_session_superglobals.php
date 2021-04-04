<?php 
// superglobals are special arrays in php which pre populated with values by the time your code runs
// superglobals arrays are ->
// $_GET , $_POST 
// $_SERVER -> this contains the information about the server
echo $_SERVER['SERVER_NAME'] . '<br/>';
echo $_SERVER['REQUEST_METHOD'] . '<br/>';
echo $_SERVER['PHP_SELF'] . '<br/>';
echo $_SERVER['SCRIPT_FILENAME'] . '<br/>';
// $_SESSION , $_COOKIE


// $_SESSION -> session is for carrying over variables on several pages .
//keeping track of information on server side or accessing the data from a page to different pages 
// session stores data on server between requests 

// $_COOKIES -> cookies are opposite of sessions 
// using cookies data is stored on users computer 
if (isset($_POST['submit'])){


    //setting up a cookie
    setcookie('gender',$_POST['gender'],time() + 86400); //params as (cookie name , value for cookie , time of expiry of cookie)
    
    session_start(); // starting a session is must
    $_SESSION['name']=$_POST['name'];
    header('Location:ternary.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobals</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="name">
        <select name="gender" id="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <input type="submit" name="submit" id="" value="submit">
    </form>
</body>
</html>