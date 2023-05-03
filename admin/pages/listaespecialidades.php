<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Especialidades</h2>
                        
                    </div>
                    <table class="table table-bordered table-striped">
  <thead>
    <tr>
      
      <th>Especialidade</th>
      <th>Descrição</th>
      <th>Ver Médicos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Cardiologia</td>
      <td>Especialidade que se dedica ao diagnóstico e tratamento de doenças do coração e do sistema cardiovascular.</td>
      <td>
        <a href="read.php?id=1" class="botao-especialidade" title="Ver Médicos" data-toggle="tooltip" data-especialidade="Cardiologia">
          <span class="fa fa-eye"></span>
        </a>
      </td>
    </tr>
    <tr>
    <td>Dermatologia</td>
      <td>Especialidade que se dedica ao diagnóstico e tratamento de doenças da pele, cabelos e unhas.</td>
      <td>
        <a class="botao-especialidade" title="Ver Médicos" data-toggle="tooltip" data-especialidade="Dermatologia">
          <span class="fa fa-eye"></span>
        </a>
      </td>
    </tr>
    <tr>
    <td>Endocrinologia</td>
    <td>Especialidade que se dedica ao diagnóstico e tratamento de doenças relacionadas aos hormônios e ao metabolismo.</td>
    <td>
        <a class="botao-especialidade" title="Ver Médicos" data-toggle="tooltip" data-especialidade="Endocrinologia">
          <span class="fa fa-eye"></span>
        </a>
    </td>
    </tr>

    <tr>
    <td>Gastroenterologia</td>
      <td>Especialidade que se dedica ao diagnóstico e tratamento de doenças do trato gastrointestinal, incluindo estômago, intestino delgado, cólon e fígado.</td>
      <td>
        <a class="botao-especialidade" title="Ver Médicos" data-toggle="tooltip" data-especialidade="Gastroentereologia">
          <span class="fa fa-eye"></span>
        </a>
      </td>
    </tr>
    <tr>
    <td>Ginecologia</td>
      <td>Especialidade que se dedica à saúde reprodutiva da mulher, incluindo o diagnóstico e tratamento de doenças do sistema reprodutor feminino.</td>
      <td>
        <a href="read.php?id=2" class="botao-especialidade" title="Ver Médicos" data-toggle="tooltip" data-especialidade="Ginecologia">
          <span class="fa fa-eye"></span>
        </a>
      </td>
    </tr>
    <tr>
    <td>Neurologia</td>
      <td>Especialidade que se dedica ao diagnóstico e tratamento de doenças do sistema nervoso, incluindo cérebro, medula espinhal e nervos periféricos.</td>
      <td>
        <a class="botao-especialidade" title="Ver Médicos" data-toggle="tooltip" data-especialidade="Neurologia">
          <span class="fa fa-eye"></span>
        </a>
      </td>
    </tr>




  </tbody>
</table>
                </div>
            </div>        
        </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".botao-especialidade").click(function(event) {
        event.preventDefault();
        var especialidade = $(this).data("especialidade");
        window.location.href = "medicosparaconsulta.php?especialidade=" + especialidade;
      });
    });
  </script>

</body>
</html>