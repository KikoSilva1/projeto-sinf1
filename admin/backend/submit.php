
<?php
session_start();
require_once "config.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);


$medico = $_POST['id'] ?? '';
$data = $_POST['data'] ?? '';
$motivo = $_POST['motivo'] ?? '';

echo "id_medico: " . $medico;
echo "data: " . $data;
echo "motivo: " . $motivo;

$sql = "INSERT INTO consultas ( id_paciente, id_medico , data , motivo) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_paciente, $param_medico, $param_data, $param_motivo);
            
            // Set parameters
            $param_medico = $medico;
            $param_paciente = $_SESSION['user_id'];
            $param_data = $data;
            $param_motivo = $motivo;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                echo "Records created successfully. Redirect to landing page";
                //header("location: index.php");
                // exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        
       mysqli_stmt_close($stmt);
       mysqli_close($link);













?>