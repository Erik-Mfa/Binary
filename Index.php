<?php 
session_start();
include_once "database/wearing.php";
include_once "database/skateboard.php";
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
            <a class="dropdown-item" href="./skate/itemList.php?tipo=truck">TRUCKS</a>
            <a class="dropdown-item" href="./skate/itemList.php?tipo=rolamento">ROLAMENTOS</a>
            <a class="dropdown-item" href="./skate/itemList.php?tipo=roda">RODAS</a>
            <a class="dropdown-item" href="./skate/itemList.php?tipo=lixa">LIXAS</a>
            <a class="dropdown-item" href="./skate/itemList.php?tipo=shape">SHAPES</a>
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

<!--FIM NAV------------------------------------------------------------------------------------------>

<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="imagens/imagem_Caroussel3.jpg" alt="Primeiro Slide" height="600" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagens/imagem_Caroussel1.jpg" alt="Segundo Slide" height="600"> 
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagens/imagem_Caroussel2.jpg" alt="Terceiro Slide" height="600">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagens/imagem_Caroussel4.jpg" alt="Quarto Slide" height="600">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </ul>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <a href="/details.php?details=<?php echo $idTruck[0]?>">
        <img class="img-fluid " src="<?php echo "./imagens/".$imagemTruck[0]?>">
      </a>
      <a href="details.php?details=<?php echo $idLixa[2]?>">
        <img class="img-fluid " src="<?php echo "./imagens/".$imagemLixa[2]?>">
      </a>
    </div>
    <div class="col">
      <a href="details.php?details=<?php echo $idRolamento[2]?>">
        <img class="img-fluid" src="<?php echo "./imagens/".$imagemRolamento[2]?>">
      </a>
      <a href="details.php?details=<?php echo $idShape[2]?>">
        <img class="img-fluid" src="<?php echo "./imagens/".$imagemShape[2]?>">
      </a>
    </div>
    <div class="col">
      <a href="details.php?details=<?php echo $idShape[4]?>">
       <img class="img-fluid" src="<?php echo "./imagens/".$imagemShape[5]?>">
      </a>
      <a href="details.php?details=<?php echo $idRoupa[0]?>">
       <img class="img-fluid" src="<?php echo "./imagens/".$imagemRoupa[0]?>">
      </a>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</main>
<!--INICIO FOOTER------------------------------------------------------------------------------------------>
<footer>
<div class="container">
  <div class="row">
    <div class="col-4">
      <h4 class="mt-4">Formas de entrega:</h4>
        <div class="mt-3">
          <li>PAC</li>
          <li>Sedex</li>
          <li>FedEx</li>
          <li>Correios</li>
        </div>
      </div>   
    <div class="col-4 mt-4">
      <h4>Quem nós somos:</h4>
      <p>
        Somos uma loja virtual com o objetivo de levar aos clientes a praticidade aliada à elegância e bom gosto.
        Nosso objetivo é que grandes marcas e produtos selecionados criteriosamente cheguem a todos os clientes com ótimos preços e sempre garantindo um alto padrão de qualidade.      
        Seja você também um cliente privilegiado comprando na Binary!
      </p>
    </div>
    <div class="col-4 mt-4">
      <h4>Aceitamos:</h4>
      <img class="margin-left: 3rem" src="imagens/cartao_Bandeiras.png" width="20%">
    </div>
  </div>
</div>
</footer>
</body>
</html>
