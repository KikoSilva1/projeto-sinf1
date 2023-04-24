<?php

@include '../backend/config.php';

session_start();

if(isset($_POST['submit'])){

  
   $email = mysqli_real_escape_string($link, $_POST['email']);
   $pass = $_POST['password'];
   
   $selectmedico = " SELECT * FROM medicos WHERE email = '$email' && password = '$pass' ";
   $selectpaciente = " SELECT * FROM pacientes WHERE email = '$email' && password = '$pass' ";

   $resultmedico = mysqli_query($link, $selectmedico);
   $resultpaciente = mysqli_query($link, $selectpaciente);

   if(mysqli_num_rows($resultmedico) + mysqli_num_rows($resultpaciente)> 0){

      if(mysqli_num_rows($resultmedico)>0){

         $user_data = mysqli_fetch_assoc($resultmedico);
         $_SESSION['user_id'] = $user_data['id'];
         $_SESSION['user_type'] = 'medico';
         $_SESSION['user_email'] = $user_data['email'];
         $_SESSION['user_name'] = $user_data['nome'];
         
         header('location:dashboardmedico.php');

      }else{

         $user_data = mysqli_fetch_assoc($resultpaciente);
         $_SESSION['user_id'] = $user_data['id'];
         $_SESSION['user_type'] = 'paciente';
         $_SESSION['user_email'] = $user_data['email'];
         $_SESSION['user_name'] = $user_data['nome'];
         
         header('location:cancerinfo.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">  

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '< <span class="error-msg">'.$error.'</span>'; 
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>