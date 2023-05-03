<!DOCTYPE html>
<html lang="en">

<head>
  <title>Prevents_cancer</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto", sans-serif;
    }

    .w3-sidebar {
      z-index: 3;
      width: 225px;
      top: 43px;
      bottom: 0;
      height: inherit;
    }

    .w3-top {
      background-color: #1c294a !important;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a href="login_form.php" class="w3-bar-item w3-button w3-theme-l1">Log Out</a>
      <a href="listaespecialidades.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Marcações</a>
      <a href="tablemedicos.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Médicos</a>
    </div>
  </div>

  <!-- Sidebar -->
  <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
      <i class="fa fa-remove"></i>
    </a>
    <h4 class="w3-bar-item"><b>Menu</b></h4>


    <a class="w3-bar-item w3-button w3-hover-black" href="perguntascancro.php">Ficha Anamnese</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="obesidade.php">Questionário: Risco de Obesidade</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="precario.php">Preçário</a>
  </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
  <div class="w3-main" style="margin-left:250px">

    <div class="w3-row w3-padding-64">
      <div class="w3-twothird w3-container">
        <h1 class="w3-text-teal">O que é</h1>
        <p>O cancro da próstata é atualmente um dos principais cancros enfrentados pela população masculina, sendo o de maior incidência e o segundo em mortalidade. À medida que a esperança média de vida aumenta, observa-se um aumento da incidência e da mortalidade do cancro da próstata

          Quando as células da próstata sofrem alterações no seu genoma (ADN), que não morrem quando envelhecem ou se danificam e produzem novas células que não são necessárias de forma descontrolada, tornam-se células de cancro.

        </p>
      </div>
      <div class="w3-third w3-container">
        <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
        <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-twothird w3-container">
        <h1 class="w3-text-teal">Prevenção</h1>
        <p>O rastreio da população em massa é definido como a análise sistemática dos homens assintomáticos (em risco) e geralmente é iniciado pelas autoridades de saúde. Em contraste, a deteção precoce ou rastreio oportuno consiste num processo que começa por iniciativa própria de um homem que vai ser avaliado pelo médico. O objetivo primário com o rastreio é: redução da mortalidade devido ao cancro da próstata com a manutenção de qualidade de vida.

          A mortalidade por cancro da próstata varia amplamente de país para país no mundo industrializado. No entanto, a mortalidade devido ao cancro da próstata, tem diminuindo na maioria dos países ocidentais.</p>
      </div>
      <div class="w3-third w3-container">
        <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
        <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
      </div>
    </div>

    <div class="w3-row w3-padding-64">
      <div class="w3-twothird w3-container">
        <h1 class="w3-text-teal">Fatores de Risco</h1>
        <p>Estudos epidemiológicos têm mostrado uma forte evidência para uma predisposição genética no cancro da próstata, com base em dois dos fatores mais importantes, fundo étnico e história familiar. Estudos genéticos identificaram 100 loci suscetíveis comuns que contribuem para o risco de cancro da próstata.

          Uma pequena subpopulação de homens com cancro da próstata (cerca de 9%) tem cancro da próstata hereditário verdadeiro. Este é definido como a existência de três ou mais parentes afetados, ou pelo menos dois parentes que desenvolveram doença de início precoce, ou seja, antes dos 55 anos de idade. Doentes com cancro da próstata hereditário geralmente têm um início de doença seis a sete anos mais cedo do que nos casos esporádicos.

          Fatores como dieta, consumo de álcool, comportamento sexual, exposição a radiação ultravioleta, inflamação crónica e exposição ocupacional têm sido discutidos como sendo importantes na causa do cancro da próstata não hereditário. No entanto não há, ainda, evidências suficientes para recomendar alterações de estilo de vida (como uma reduzida ingestão de gordura animal e um aumento da ingestão de frutas, cereais e legumes) para diminuir o risco. Mas, tais modificações de estilo de vida podem ser associadas a outros benefícios e, portanto, devem ser incentivados.</p>
      </div>
      <div class="w3-third w3-container">
        <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
        <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
      </div>
    </div>





    <div class="w3-display-container">
      <h1 class="w3-text-teal">Sintomas</h1>
      <img src="../img/cancrodaprostata.jpg" alt="Lights">
    </div>

    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
      <div class="w3-bar">
        <a class="w3-button w3-black" href="#">1</a>
        <a class="w3-button w3-hover-black" href="#">2</a>
        <a class="w3-button w3-hover-black" href="#">3</a>
        <a class="w3-button w3-hover-black" href="#">4</a>
        <a class="w3-button w3-hover-black" href="#">5</a>
        <a class="w3-button w3-hover-black" href="#">»</a>
      </div>
    </div>

    <footer id="myFooter">
      <div class="w3-container w3-theme-l2 w3-padding-32">
        <h4><a href="sobrenos.html">Sobre nós</a></h4>
      </div>

    </footer>

    <!-- END MAIN -->
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