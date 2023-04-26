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

		<label for="especialidade">Especialidade:</label>

			<select name="especialidade" id="especialidade" required>
				<option value="">-- Selecionar --</option>
				<option value="oncologia">Oncologia</option>
				<option value="pediatria">Pediatria</option>
				<option value="cardiologia">Cardiologia</option>
			</select>

			<label for="medico">Médico:</label>

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

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function() {

  // When the first dropdown changes
  $('#especialidade').on('change', function() {

    // Get the selected specialty
    var especialidade = $(this).val();

    // Fetch the available doctors for the selected specialty from the server using AJAX
    $.ajax({
      url: '../backend/get_doctors.php',
      type: 'GET',
      data: { "especialidade": especialidade },
      dataType: 'json',
      success: function(data) {

        // Update the options in the second dropdown with the fetched data
        var options = '<option value="">-- Selecionar --</option>';
        for (var i = 0; i < data.length; i++) {
          options += '<option value="' + data[i].id + '">' + data[i].nome + '</option>';
        }
        $('#medico').html(options);

      },
      error: function(xhr, status, error) {
        console.log('Error fetching doctors:', error);
      }
    });

  });

});
</script>

</body>
</html>
