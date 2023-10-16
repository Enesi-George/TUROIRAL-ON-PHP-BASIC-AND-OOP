<?php 
include('config/db_connect.php');



//check GET request id param
if(isset($_GET['id'])){
    //escape sensitive special character to protect the db
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    //make sql query
    $sql = "SELECT * FROM pizza WHERE id = $id";

    //get the sql query result
    $result = mysqli_query($conn, $sql);

    //fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    //free the result
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

    // print_r($pizza);
}


//use POST request to Delete by id
if(isset($_POST['delete'])){
    //escape special chars from being sent to the db
    $id_to_delete = mysqli_real_escape_strin($conn, $_POST['id_to_delete']);
    
    //make sql query
    $sql = "DELETE FROM pizza WHERE id =$id_to_delete";
    
    
    if(mysqli_query($conn, $sql)){
        //send a success_message or redirect
        header('Location: index.php');
    }else{
        //failure message
        echo 'query error: ' . mysqli_erro($conn);
    
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail page</title>
</head>
<body>
<?php require ('templates/header.php') ?>

<div class="container center">
    <?php if($pizza): ?>
        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
        <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?> </p> 
        <p>  <?php echo htmlspecialchars($pizza['created_at']); ?> </p>

        <form action="details.php" method="POST">
            <input type="hidden" name='id_to_delete' value='<?php echo $pizza['id'] ?>'>

            <input type="submit" name='delete' value='Delete' class='btn brand z-depth-0'>
        </form>

        <?php else:?>
            <p>no such pizza exists! </p>

         <?php endif; ?>
</div>

    
<?php require('templates/footer.php') ?>
</body>
</html>