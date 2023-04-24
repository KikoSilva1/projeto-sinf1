<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel='stylesheet' type='text/css' href='../css/marcaçoes.css'>

	<title>Marcações</title>
	
</head>

<body>

	<div class="container"  style="margin-top:70px" >
		<h1>Marcar Consulta</h1>

		<form method="POST" action="submit.php">

		<label for="gender">Especialidade:</label>

			<select name="especialidade" id="gender" required>
				<option value="">-- Selecionar --</option>
				<option value="oncologia">Oncologia</option>
				<option value="pediatria">Pediatria</option>
				<option value="cardiologia">Cardiologia</option>
			</select>

			<label for="gender">Médico:</label>

			<select name="medico" id="medico" required>
				<option value="">-- Selecionar --</option>
				<option value="id_medico">Paulo Proença</option>
				<option value="id_medico">Carla Teixeira</option>
				<option value="id_medico">Pedro Andrade</option>
			</select>

			<label for="data">Data</label>
			<input type="text" name="data" id="data" required>

			<label for="gender">Preferência de contacto:</label>
			<select name="gender" id="gender" required>
				<option value="">-- Selecionar --</option>
				<option value="male">Telemóvel</option>
				<option value="female">Email</option>
			</select>

			<input type="submit" value="Submeter">
		</form>
	</div>

</body>
</html>
