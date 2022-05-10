<?php 
session_start();
include_once "database/wearing.php";
include_once "database/skateboard.php";
$numeroItem = 1;
$urlDetails = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Binary</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        if(isset($_SESSION['userName'])){
          $adm = $_SESSION['userLevel'];
      }
    ?>
<main>
<!--NAV-->
<nav class="navbar navbar-light bg-white ">
  <a class="navbar-brand" href="index.php">
    <img src="imagens/logo_Opcional.png" width="280" height="100" alt="">
  </a> 
  <div class="nav-item">
    <ul class="nav">
      <li>
        <div class="dropdown">
          <a class="btn text-dark drop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            SKATES
          </a>      
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/skate/truck.php">TRUCKS</a>
            <a class="dropdown-item" href="/skate/rolamento.php">ROLAMENTOS</a>
            <a class="dropdown-item" href="/skate/roda.php">RODAS</a>
            <a class="dropdown-item" href="/skate/lixa.php">LIXAS</a>
            <a class="dropdown-item" href="/skate/shape.php">SHAPES</a>
          </div>
        </div>
      </li>
      <li>
        <div class="dropdown ">
          <a class="btn text-dark drop margin-nav" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ROUPAS
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">BONÉS</a>
            <a class="dropdown-item" href="#">CAMISETAS</a>
            <a class="dropdown-item" href="#">CAMISAS</a>
            <a class="dropdown-item" href="#">MOLETONS</a>
          </div>
        </div>
      </li>
      <li>
        <a class="nav-link text-dark margin-nav" href="#">TÊNIS</a>
      </li>
      <li>
        <a class="nav-link text-dark margin-nav" href="#">ACESSÓRIOS</a>
      </li>
    </ul>
  </div>

  <div>
    <form id="pesquisa" class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Qual o seu desejo? " aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2" type="submit">Buscar</button>
    </form>
  </div>
  <div class="float-right">
    <?php 
    if(isset($_SESSION['userName'])){
      echo "<h4 class='fonte'>Olá," . $_SESSION['userName'] ."!</h4>";
    }
    ?>
      <div class="d-flex justify-content-center">
        <?php
          if(isset($_SESSION['userName'])){
            
            if($adm == 2){
              echo "<a href='admin.php' class='btn btn-outline-success my-2'>Admin</button>";
            }
            echo "<a href='./database/logout.php' class='btn btn-outline-success my-2 margin-nav'>Logout</a>"; 
        }else{
          echo "<a href='login.php' class='btn btn-outline-success my-2'>Login</a>";
        }
        

        ?>
      </div>
  </div>
</nav>

<?php 
if($showSkateDetail == "mostrarskate"){
  echo "<div class='d-flex justify-content-center fonte'>
  <img class='img-fluid ' src='./imagens/$imagemSkateDetail[0]' width='500' height='500'>
  <ul class='list-group list-group-flush '>
     <li class='list-group-item'>
         <h1>$nomeSkateDetail[0]</h2><br>
      </li>
      <li class='list-group-item'>
         <h2>Marca: $marcaSkateDetail[0]</h1>
      </li>";
      if($promocaoSkateDetail[0] != 1){
        $precoSkateDetailPromocao[0] = $precoSkateDetail[0] - ($precoSkateDetail[0] * $promocaoSkateDetail[0] / 100); 
        echo "<li class='list-group-item'>
                <h3>Preço: $precoSkateDetailPromocao[0]R$ <span class='badge badge-danger'>Promoção</span></h1>
             </li>"; 
      } else {
        echo "<li class='list-group-item'>
                <h3>$precoSkateDetail[0]R$ </h3>
              </li>";
      }
      echo "<li class='list-group-item'>
          <input class='btn btn-outline-success my-2' type='submit' value='Adicionar ao carrinho'>
      </li>
  </ul>
</div>";
}
?>

<?php 
if($showRoupaDetails == "mostrarroupa"){
  echo "<div class='d-flex justify-content-center fonte'>
  <img class='img-fluid ' src='./imagens/$imagemRoupaDetails[0]' width='500' height='500'>
  <ul class='list-group list-group-flush '>
     <li class='list-group-item'>
         <h1>$nomeRoupaDetails[0]</h2><br>
      </li>
      <li class='list-group-item'>
         <h2>Marca: $marcaRoupaDetails[0]</h1>
      </li>";
      if($promocaoRoupaDetails[0] != 1){
        $precoRoupaDetailsPromocao[0] = $precoRoupaDetails[0] - ($precoRoupaDetails[0] * $promocaoRoupaDetails[0] / 100); 
        echo "<li class='list-group-item'>
                <h3>Preço: $precoRoupaDetailsPromocao[0]R$ <span class='badge badge-danger'>Promoção</span></h1>
             </li>"; 
      } else {
        echo "<li class='list-group-item'>
                <h3>$precoRoupaDetails[0]R$ </h3>
              </li>";
      }
      echo "<li class='list-group-item'>
          <input class='btn btn-outline-success my-2' type='submit' value='Adicionar ao carrinho'>
      </li>
  </ul>
</div>";
}
?>



</body>
</html>