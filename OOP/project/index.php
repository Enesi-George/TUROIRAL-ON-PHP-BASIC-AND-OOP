<?php 

  require('user_validator.php');

  $errors = [];

  if(isset($_POST['submit'])){
    // validate entries
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();

    // if errors is empty --> save data to db
  }

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  <div class="new-user">
    <h2>Create a new user</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

      <label>username: </label>
      <input type="text" name="username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
      <div class="error">
        <?php echo $errors['username'] ?? '' ?>
      </div>

      <label>email: </label>
      <input type="text" name="email" value="<?= htmlspecialchars($_POST['email']?? '')  ?>">
      <div class="error">
        <?php echo $errors['email'] ?? '' ?>
      </div>

      <label">Password:</label>
      <input type="text" name="password1" placeholder="Password">
      <div class="error">
        <?php echo $errors['password1'] ?? '' ?>
      </div>
      
      <label>Confirm Password:</label>
      <input type="text" name="password2" placeholder="Confirm Password" >
      <div class="error">
        <?php echo $errors['password2'] ?? '' ?>
      </div>


      <input type="submit" value="submit" name="submit" >

    </form>
  </div>

</body>
</html>