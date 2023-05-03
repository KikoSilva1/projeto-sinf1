<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel='stylesheet' type='text/css' href='../css/marcaçoes.css'>

	<title>Marcações</title>
	
</head>

<body>

<?php 
$id = $_GET['id_doctor'];
require_once "../backend/config.php";
                    
// Attempt select query execution

// $sql = "SELECT * FROM employees";
  $sql = "SELECT * FROM medicos WHERE id = $id ";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);




?>







<div class="container" style="margin-top:70px">
	<h1>Marcar Consulta</h1>

	<form method="POST" action="../backend/submit.php">

	    
		<input type="hidden" name="id" value="<?php echo $id ?>">
		
		<label for="especialidade">Especialidade: <b> <?php echo $_GET['area'] ?? ''; ?> </b> </label>
		

		<label for="medico">Médico: <b> <?php echo $row['nome'] ?? ''; ?>  </b> </label>
		

		<label for="data">Data</label>
		<input type="text" name="data" id="data">

		<label for="gender">Motivo:</label>
		<input type="text" name="motivo" id="motivo">

		<input type="submit" value="Submeter">
	</form>
</div>
	
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

;
</script>

</body>
</html>
