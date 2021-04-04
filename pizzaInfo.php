<?php 
include "header.php";
include "db_connection.php";

//logic to delete the pizza
if (isset($_POST['Delete'])){
    $delete_id=mysqli_real_escape_string($conn , $_POST['delete_by_id']);
    
    //make query
    $sql = "DELETE FROM pizza WHERE id=$delete_id";

    //get query result
    if(mysqli_query($conn,$sql)){
        //success
        header('Location :home.php');
    }else{
        echo 'Query Error '. mysqli_error($conn);
    }
}

// check the GET request 
if (isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn , $_GET['id']);

    //make query
    $sql = "SELECT * FROM pizza WHERE id=$id";

    //get query result
    $result = mysqli_query($conn , $sql);
    //fetch the row data in array format 
    $single_pizza = mysqli_fetch_assoc($result);

    //free the result memory
    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($single_pizza);
}
?>

<div class="container">
    <?php if($single_pizza) :?>
        <h4><?php echo htmlspecialchars($single_pizza['title']);?></h4>
        <p>Created By: <?php echo htmlspecialchars($single_pizza['email']);?></p>
        <p>Date Created On: <?php echo date($single_pizza['created_at']);?></p>
        <h5>Ingrediants</h5>
        <p><?php echo htmlspecialchars($single_pizza['ingredients']);?></p>

        <!-- Delete Pizza Form -->
        <form action="pizzaInfo.php" method="POST">
            <input type="hidden" name="delete_by_id" value="<?php echo $single_pizza['id']?>">
            <input type="submit" value="Delete " name="Delete" class="btn-danger">
        </form>
    <?php else:?>
        <h4><?php echo "There Is No Any Pizza Exists!"?></h4>
    <?php endif;?>

</div>

<?php 
include "footer.php";

?>