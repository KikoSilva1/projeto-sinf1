<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Risco de Cancro da Próstata : </strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">


                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Questionário</h4>
                    </div>
                    <div class="card-body">

                        <form action="../backend/code_anamenese.php" method="POST" >
                            
                            <div class="from-group mb-3">
                                <label for=""><b>No último mês, quantas vezes teve a sensação de não ter esvaziado a bexiga por completo quando acaba de urinar?</b></label>
                                <select name="pergunta1" class="form-control">
                                <option value="">--Selecione--</option>
                                    <option value="0">Nenhuma</option>
                                    <option value="1">Menos de 1 em 5 vezes</option>
                                    <option value="2">Menos de metade das vezes</option>
                                    <option value="3">Cerca de metade das vezes</option>
                                    <option value="4">Mais de metade das vezes</option>
                                    <option value="5">Quase sempre</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>No último mês, quantas vezes precisou de urinar novamente, menos de 2 horas depois de urinar?</b></label>
                                <select name="pergunta2" class="form-control">
                                <option value="">--Selecione--</option>
                                <option value="0">Nenhuma</option>
                                <option value="1">Menos de 1 em 5 vezes</option>
                                <option value="2">Menos de metade das vezes</option>
                                <option value="3">Cerca de metade das vezes</option>
                                <option value="4">Mais de metade das vezes</option>
                                <option value="5">Quase sempre</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>No último mês, quantas vezes teve que parar e recomeçar a urinar? </b></label>
                                <select name="pergunta3" class="form-control">
                                <option value="">--Selecione--</option>
                                <option value="0">Nenhuma</option>
                                <option value="1">Menos de 1 em 5 vezes</option>
                                <option value="2">Menos de metade das vezes</option>
                                <option value="3">Cerca de metade das vezes</option>
                                <option value="4">Mais de metade das vezes</option>
                                <option value="5">Quase sempre</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>No último mês, quantas vezes teve dificuldade em reter a urina?</b></label>
                                <select name="pergunta4" class="form-control">
                                <option value="">--Selecione--</option>
                                <option value="0">Nenhuma</option>
                                <option value="1">Menos de 1 em 5 vezes</option>
                                <option value="2">Menos de metade das vezes</option>
                                <option value="3">Cerca de metade das vezes</option>
                                <option value="4">Mais de metade das vezes</option>
                                <option value="5">Quase sempre</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>No último mês, quantas vezes teve um jacto urinário fraco?</b></label>
                                <select name="pergunta5" class="form-control">
                                <option value="">--Selecione--</option>
                                <option value="0">Nenhuma</option>
                                <option value="1">Menos de 1 em 5 vezes</option>
                                <option value="2">Menos de metade das vezes</option>
                                <option value="3">Cerca de metade das vezes</option>
                                <option value="4">Mais de metade das vezes</option>
                                <option value="5">Quase sempre</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>No último mês, quantas vezes teve que fazer um esforço ou pressão para iniciar a micção? </b></label>
                                <select name="pergunta6" class="form-control">
                                <option value="">--Selecione--</option>
                                <option value="0">Nenhuma</option>
                                <option value="1">Menos de 1 em 5 vezes</option>
                                <option value="2">Menos de metade das vezes</option>
                                <option value="3">Cerca de metade das vezes</option>
                                <option value="4">Mais de metade das vezes</option>
                                <option value="5">Quase sempre</option>

                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <button  type="submit" name="save_select" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>