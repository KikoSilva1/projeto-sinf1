


<?php
    session_start();
    require_once "config.php";

    if(isset($_POST['save_select']))

{   $idade = intval($_POST['idade']);
    $historial_familia_obesa= intval($_POST['historial_familia_obesa']);
    $comida_calorica = intval($_POST['comida_calorica']);
    $alcool = intval($_POST['alcool']);
    $food_between_meals = intval($_POST['food_between_meals']);
    $number_meals = intval($_POST['number_meals']);
    $water= intval($_POST['water']);
    $activity= intval($_POST['activity']);

    $logit = -0.9191153  +  0.1634465 *$idade +  2.627926 *$historial_familia_obesa +  0.7980157 *$comida_calorica +  0.4802204 *$alcool +  -1.940877 * $food_between_meals +  -0.4483449 *$number_meals +  0.2987501 *$water +  -0.4075468 *$activity;
    $probability = 1 / (1 + exp(-$logit));
    $probability = round($probability*100, 2);

}

$query = "INSERT INTO diagnostic_form (name,gender) VALUES ('$name','$gender')";
$query_run = mysqli_query($link, $query);

if($query_run)
{
    $_SESSION['status'] =  $probability ."%";
    header("Location:  ../pages/obesidade.php");

    
}
else
{
    $_SESSION['status'] = "Not Inserted";
    header("Location: ../pages/obesidade.php");
}


?>




