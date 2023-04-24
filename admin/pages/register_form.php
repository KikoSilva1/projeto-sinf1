
<?php

include("../backend/config.php");

// check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // get form data
  $username = $_POST["username"];
  $password = $_POST["password"];
  $user_type = $_POST["user_type"];
  $email =  $_POST["email"];
  
  // sanitize input data to prevent SQL injection
  $username = mysqli_real_escape_string($link, $username);
  $password = mysqli_real_escape_string($link, $password);
  $user_type = mysqli_real_escape_string($link, $user_type);
  
  // validate form data
  $errors = array();
  if (empty($username)) {
    $errors[] = "Username is required";
  }
  if (empty($password)) {
    $errors[] = "Password is required";
  }
  if (empty($user_type)) {
    $errors[] = "User type is required";
  }

  

  // check if user already exists in the corresponding table
  if ($user_type == "paciente") {
    $sql = "SELECT * FROM pacientes WHERE nome = '$username'";
  } elseif ($user_type == "medico") {
    $sql = "SELECT * FROM medicos WHERE nome = '$username'";
  }
  $result = mysqli_query($link, $sql);
  if (mysqli_num_rows($result) > 0) {
   
      $errors[] = "Username already exists";
    }
    else if($user_type == "paciente" and empty($errors)){
      $sql = $sql = "INSERT INTO pacientes (nome, password, email) VALUES ('$username', '$password', '$email')";
      $result = mysqli_query($link, $sql);
      
      $user_id = mysqli_insert_id($link); // get the user ID
    }else if($user_type == "medico"and empty($errors)){
      $sql = $sql = "INSERT INTO medicos (nome, password, email) VALUES ('$username', '$password', '$email')";
      $result = mysqli_query($link, $sql);
      $user_id = mysqli_insert_id($link);// get the user ID
    }

 
    
      header("Location: login_form.php");
    
    exit();

  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Crie uma conta</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="username" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="paciente">Paciente</option>
         <option value="medico">Médico</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>


</div>

</body>
</html>