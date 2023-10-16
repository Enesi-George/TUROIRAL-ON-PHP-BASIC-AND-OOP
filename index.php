<?php 


//to communicate to the DB, we use MYSQLI (i for improve) or PDO(php data object)
//for now lets use MYSQLI

//import the database
include('config/db_connect.php');

//write query to database table
$sql = 'SELECT title, ingredients, id FROM pizza';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free reulst form memory
mysqli_free_result($result);

// print_r ($pizzas);

// print_r ( explode(',', $pizzas[0]['ingredients']));

?>

<!DOCTYPE html>
<html lang="en">
<!-- <?php include ('templates/header.php') 
?> -->

<?php require ('templates/header.php') ?>
<h4 class="center grey-text"> Pizzas!</h4>

<div class="container"> 
    <div class="row">
        <?php foreach($pizzas as $pizza):?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                <img src="img/pizza.svg" alt="pizza" class="pizza">

                    <div class="card-content center">
                        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
                        <!-- <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div> -->
                        <ul>
                            <?php foreach( explode(',', $pizza['ingredients']) as $ingredient) : ?>
                                <li>
                                    <?php echo htmlspecialchars($ingredient) ?>
                                </li>
                            <?php endforeach; ?>
                    
                    </ul>
                    </div>
                    <div class="card-action right-align"> <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">more info</a> </div>
                </div>
            </div>
            <?php endforeach;?>

            <!-- <?php if(count($pizzas) <=2 ):?>
                <p>there are pizza upto 2</p>
                <?php  else : ?>
                    <p></p>there are pizza more than 2
                    <?php endif; ?> -->
    </div>
</div>



    
<?php require('templates/footer.php') ?>
</html>