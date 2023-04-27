<?php
    session_start();
    require_once "config.php";

    if(isset($_POST['save_select']))

{   $pergunta1 = intval($_POST['pergunta1']);
    $pergunta2= intval($_POST['pergunta2']);
    $pergunta3 = intval($_POST['pergunta3']);
    $pergunta4 = intval($_POST['pergunta4']);
    $pergunta5 = intval($_POST['pergunta5']);
    $pergunta6 = intval($_POST['pergunta6']);
   

   $resultado = $pergunta1 + $pergunta2 + $pergunta3 + $pergunta4 + $pergunta5 + $pergunta6;
   

}

$complete = true;
     
    if(empty($pergunta1) or empty($pergunta1) or empty($pergunta2) or empty($pergunta3) or empty($pergunta4) or empty($pergunta5) or empty($pergunta6)){
        $complete = false;
    }




if($complete){

    if($resultado<10){  
    $_SESSION['status'] =  "Baixo Risco";
    header("Location:  ../pages/perguntascancro.php");
    }else if($resultado<=20){
     $_SESSION['status'] =  "Risco Moderado";
     header("Location:  ../pages/perguntascancro.php"); 
    }else {
    $_SESSION['status'] =  "Risco elevado";
    header("Location:  ../pages/perguntascancro.php");    
    }
}
else{
    $_SESSION['status'] =  " Responda a todas as perguntas do questionário ";
    header("Location:  ../pages/perguntascancro.php");
}
    

?>




