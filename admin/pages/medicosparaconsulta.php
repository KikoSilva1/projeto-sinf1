<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' type='text/css' href='../css/tablemedicos.css'>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  

	<title>Médicos</title>

	
</head>
<body>
<?php
                    
                    if(isset($_GET["especialidade"]) && !empty(trim($_GET["especialidade"]))){
                        // Include config file
                        require_once "../backend/config.php";
                        
                        // Prepare a select statement
                        
                
                       
                    
                        $sql = "SELECT * FROM medicos WHERE area = ?";
$stmt = mysqli_stmt_init($link);

if(mysqli_stmt_prepare($stmt, $sql)){
    mysqli_stmt_bind_param($stmt, "s", $param_especialidade);
    $param_especialidade = $_GET['especialidade'];
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) > 0){
            echo '<table class="table table-bordered table-striped w3-margin-left w3-margin-right ">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Nome</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Área de Especialização</th>";
                                        echo "<th>Ações</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['area'] . "</td>";
                echo "<td>";
                echo '<a href="marcacoes.php?id_doctor='.$row['id'].'&area='.$row['area'].'" class="mr-3" title="Agendar Consulta" data-toggle="tooltip"><span class="fa fa-calendar"></span></a>';
                echo "</td>";
                echo "</tr>";
            }
            mysqli_free_result($result); // libera a memória ocupada pelo resultado da consulta anterior
        } else{
            echo "<p class='lead'><em>Não foram encontrados médicos com essa especialidade.</em></p>";
        }
    } else{
        echo "Oops! Algo deu errado. Por favor, tente novamente mais tarde.";
    }
}
                    }
mysqli_stmt_close($stmt);
mysqli_close($link);
?>
</body>
</html>
