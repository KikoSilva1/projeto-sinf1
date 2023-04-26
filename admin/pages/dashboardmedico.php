<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' type='text/css' href='../css/calendar.css'>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">


<?php 
    @include '../backend/config.php';
    session_start();
    $id_medico = $_SESSION['user_id'];
    $sql_consultas = "SELECT * FROM consultas WHERE id_medico = $id_medico"; 
    $result_consultas = mysqli_query($link, $sql_consultas);
    $number_consultas = mysqli_num_rows($result_consultas); 

    $sql_pacientes = "SELECT * FROM pacientes WHERE id_medico = $id_medico"; 
    $result_pacientes = mysqli_query($link, $sql_pacientes);
    $number_pacientes = mysqli_num_rows($result_pacientes); 
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:50px;margin-top:43px; w3-margin-bottom">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px ">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom w3-left">
    <div class="w3-quarter">
    <a href="index.php" class=" w3-button w3-block"> 
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Mensagens</h4>
      </div>
</a>
    </div>

    <div class="w3-quarter">
    <a href="listaconsultas.php" class="w3-button w3-block"> 
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3> <?php echo $number_consultas ?> </h3>  
        </div>
        <div class="w3-clear"></div>
        <h4>Consultas</h4>
      </div>
</a>
    </div>

    <div class="w3-quarter">
    <a href="index.php" class=" w3-button w3-block"> 
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-search w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>...</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Pesquisar</h4>
      </div>
</a>
    </div>

    <div class="w3-quarter ">
    <a href="../crud/listapacientes.php" class="w3-button  w3-block"> 
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3> <?php echo $number_pacientes ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Pacientes</h4>
      </div>
</a>
    </div>
  

    <!-- Calendar -->
<div class="w3-container w3-margin-top">
    <div class="month   w3-margin-top">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      August<br>
      <span style="font-size:18px">2021</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

</div>




<!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
