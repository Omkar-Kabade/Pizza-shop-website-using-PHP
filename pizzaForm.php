<?php 
include "header.php";
include 'db_connection.php'; // to connect with db

$email = $title = $matter = '';  // declared as empty strings 
$show_error = array('email'=>'','title'=>'','ingredients'=>''); // used to store errors
if (isset($_POST['submit'])){  // $_POST is an global array which stores value from user  
    //htmlspecialchars() converts any html char or element into html entity so that it cant be use to destroy site
    //form validation check email
    if (empty($_POST['email'])){
        $show_error['email']= 'An Email Required </br>' ;
    }
    else{
        $email = $_POST['email'];
        if(!filter_var($email , FILTER_VALIDATE_EMAIL)){  // email validation method
            $show_error['email']= "Enter A Valid Email";
        }
    }

    //form validation check title
    if (empty($_POST['title'])){
        $show_error['title']= 'A title Required </br>' ;
    }
    else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){ //preg_match function for regex
            $show_error['title']= "Title Must Letters And Spaces";
        }
    }

    //form validation check email
    if (empty($_POST['ingrd'])){
        $show_error['ingredients']= 'At least one Ingredient Required </br>' ;
    }
    else{
        $matter = $_POST['ingrd'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$matter)){
            $show_error['ingredients']= "Ingridients Must Be Comma Separated";
        }
    }

    //checking again if there are any errors in form using array filter method
    // array filter method cycles through an array and returns a callback function
    // in this case we are using we using $show_error array to filter
    if (array_filter($show_error)){
        // echo 'Errors In The Form';
    }
    else{
        //saving data to database
        //mysqli_real_escape_string check malicious sql queries and protect db sql injection attacks
        $email = mysqli_real_escape_string($conn , $_POST['email']);  
        $title = mysqli_real_escape_string($conn , $_POST['title']);  
        $ingredients = mysqli_real_escape_string($conn , $_POST['ingrd']);  
        // create sql query
        $sql = "INSERT INTO pizza (title,email,ingredients) VALUES ('$title' ,'$email','$ingredients')";
        //save to db and check
        if (mysqli_query($conn,$sql)){
            //its success so redirect to home page
            header('Location:home.php'); // redirecting to this page after checking its error free
        }else{
            echo 'Error: '. mysqli_error($conn);
        }

    }

} // end of post check
?>

<div class="container-fluid form-div">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <div class="form-row col-sm-4">
        <h4 class="h4-title" >Add Pizza</h4>

            <div class="col-sm-12">
                <label for="email">Email</label>
                <input type="text" class="form-control"name="email" value="<?php echo htmlspecialchars($email) ?>"> 
                <p class="error-text"><?php echo $show_error['email']?></p> <!-- errors will be shown using this -->
            </div>
            <div class="col-sm-12">
                <label for="title">Pizza Name</label>
                <input type="text" class="form-control" name="title" id="title" value="<?php echo htmlspecialchars($title) ?>">
                <p class="error-text"><?php echo $show_error['title']?></p> <!-- errors will be shown using this -->
            </div>
            <div class="col-sm-12">
                <label for="ingrd">Ingrediants : (Comma Separated)</label>
                <input type="text" class="form-control" name="ingrd" id="ingrd" value="<?php echo htmlspecialchars($matter) ?>">
                <p class="error-text"><?php echo $show_error['ingredients']?></p> <!-- errors will be shown using this -->

            </div>
            <div class="col-sm-12 submit-btn">
                <input type="submit" value="submit" class="form-control btn-primary" name="submit" id="submit">
            </div>
        </div>
    </form>

</div>

<?php 
include "footer.php";
?>