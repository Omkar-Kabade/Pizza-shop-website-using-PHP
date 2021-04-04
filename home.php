<?php 
include "header.php";

include 'db_connection.php';
### Getting /retrieving the data
// 1) write query for all data
$sql = 'SELECT title,ingredients,id FROM pizza ORDER BY created_at';

// 2)make query and get result
$result = mysqli_query($conn,$sql);

// 3)fetch the resulting rows into an array
$pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC); // we get all of the data in array format

// free result from memory 
mysqli_free_result($result);

//close connnection
mysqli_close($conn);


//print the array
// print_r($pizzas);

//explode funtion it converts into an array format by giving certain parametrs as below
// print_r(explode(',',$pizzas[0]['ingredients'])); // parameters as (',') content before comma will in an array 
?>

<div class="container-fluid">
    <h4>All Pizzas</h4>
    <div class="row">
        <?php foreach($pizzas as $pizza):?>
            <div class="col-sm-6 col-md-3 col-lg-4">
                <div class="card">
                    <div class="card-header"><?php echo htmlspecialchars($pizza['title']);?></div>
                    <div class="card-body">
                        <h6 class="card-title">Ingredients</h6>
                        <p class="card-text">
                            <ul class="ul-pizza">
                                <?php foreach(explode(',',$pizza['ingredients']) as $ing){?>
                                    <li class="all-ing"><?php echo htmlspecialchars($ing)?></li>
                                <?php }?>
                            </ul>
                        </p>
                    </div>
                    <div class="card-action"><button><a href="pizzaInfo.php?id=<?php echo $pizza['id']?>">More Info</a></button></div>
                </div>
            
            </div>
        <?php endforeach?>

    </div>



</div>

<?php 
include "footer.php";
?>