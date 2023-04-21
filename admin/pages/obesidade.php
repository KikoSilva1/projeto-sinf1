<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário Obesidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Risco de Obesidade : </strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Questionário Obesidade</h4>
                    </div>
                    <div class="card-body">

                        <form action="../backend/code.php" method="POST">
                            <div class="from-group mb-3">
                                <label for="idade"><b>Qual a sua Idade ?</b></label>
                                <input type="number" name="idade" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <label for=""> <b>Tem historial de familiares obesos?</b></label>
                                <select name="historial_familia_obesa" class="form-control">
                                    <option value="">--Selecione--</option>
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>Consome comida calórica frequentemente?</b></label>
                                <select name="comida_calorica" class="form-control">
                                <option value="">--Selecione--</option>
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>Com que frequência consome bebidas alcoólicas? </b></label>
                                <select name="alcool" class="form-control">
                                <option value="">--Selecione--</option>
                                    <option value="1">Não Bebo</option>
                                    <option value="2">Às vezes</option>
                                    <option value="3">Frequentemente</option>
                                    <option value="4">Todos os dias</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>Come entre refeições? </b></label>
                                <select name="food_between_meals" class="form-control">
                                <option value="">--Selecione--</option>
                                    <option value="1">Não</option>
                                    <option value="2">Às vezes</option>
                                    <option value="3">Frequentemente</option>
                                    <option value="4">Sempre</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>Quantas refeições principais faz diariamente? </b></label>
                                <select name="number_meals" class="form-control">
                                <option value="">--Selecione--</option>
                                    <option value="1">Uma a duas</option>
                                    <option value="3">Três</option>
                                    <option value="4">Mais que três</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>Quanta água consome diariamente?  </b></label>
                                <select name="water" class="form-control">
                                <option value="">--Selecione--</option>
                                    <option value="1">Menos de 1 litro</option>
                                    <option value="2">1 a 2 litros</option>
                                    <option value="3">Mais que 2 litros</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""><b>Quantas vezes faz atividade física por semana? </b></label>
                                <select name="activity" class="form-control">
                                <option value="">--Selecione--</option>
                                    <option value="0">Não Faço</option>
                                    <option value="1">1 a 2 dias </option>
                                    <option value="2">2 a 4 dias</option>
                                    <option value="3">4 a 5 dias </option>

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