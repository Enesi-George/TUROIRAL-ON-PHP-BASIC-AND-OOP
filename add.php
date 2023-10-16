<?php 

//importing the db model
include('config/db_connect.php');

    // GET request
    // if (isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

 

    //POST request
    $title = $email = $ingredients = ''; //set initial value
    $error = array('email'=> '', 'title'=>'', 'ingredients'=>''); //assigning error to a variable

    if (isset($_POST['submit'])){

        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);

        //check email
        if (empty($_POST['email'])){
            $error['email'] = "email is required <br /> ";
        } else{
            // echo htmlspecialchars($_POST['email']);
            
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] = "please input a valid email address";
            }
        }
        //check title
        if (empty($_POST['title'])){
            $error['title'] = "title is required <br />";
        }else{
            $title = $_POST['title'];
            if(!preg_match('/[a-zA-Z\s]+$/', $title)){
                $error['title'] = 'Title must be letters and spaces only';
            }
            // echo htmlspecialchars($_POST['title']);
        }
        //check ingredients
		if(empty($_POST['ingredients'])){
			$error['ingredients'] = 'At least one ingredient is required <br />';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$error['ingredients'] = 'Ingredients must be a comma separated list';
			}
		};

        if(array_filter($error)){
            echo 'error in the form';
        } else{            
            //save the data into a function to prevent malicious data from the user into the database
            $email = mysqli_real_escape_string($conn, $_POST['email']);            
            $title = mysqli_real_escape_string($conn, $_POST['title']);           
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

            //inserting data to the sql
            $sql = "INSERT INTO pizza(title, email, ingredients) VALUES('$title', '$email','$ingredients')";

            if(mysqli_query($conn, $sql)){
                //success message OR
                //redirect to hompage
                header('Location: index.php'); 
            } else{
                //error
                echo 'query error: ' . mysqli_error($conn);
            }

        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php require ('templates/header.php') ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST" >
        <label for="email">Email:</label>
        <input type="text" name="email" value = "<?php echo htmlspecialchars($email)  ?>" >
        <div class="red-text"> 
            <?php echo $error['email'] ?>
        </div>

        <label for="title">Pizza Title:</label>
        <input type="text" name="title"  value = "<?php echo htmlspecialchars($title)  ?>">
        <div class="red-text"> 
            <?php echo $error['title']?>
        </div>

        <label for="ingredients">Ingredients (comma seperated):</label>
        <input type="text" name="ingredients"  value = "<?php echo htmlspecialchars($ingredients)  ?>" > 
        <div class="red-text"> 
            <?php echo $error['ingredients']?>
        </div>

        <div class="center">
            <input class="btn brand z-depth-0" type="submit" name="submit" value="submit">
        </div>
    </form>

</section>
    
<?php require('templates/footer.php') ?>
</html>