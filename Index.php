<?php include_once "database/wearing.php"?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <!--fontes-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
  <!--fontes-->  
</head>
<main>
<body>
  <!--NAV-->
  <div class="collapse navbar-collapse" id="divDoNav"></div>  
  <nav class="navbar navbar-expand-lg navbar-light bg-white ">
    <a class="navbar-brand" href="#"><img src="imagens/logo_Opcional.png" width="280" height="100" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <ul class="nav-color nav justify-content-center nav-fill">
    <li class="nav-item">
      <div class="dropdown">
        <a class="btn btn-lg text-dark drop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SKATES
        </a>      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">TRUCKS</a>
          <a class="dropdown-item" href="#">ROLAMENTOS</a>
          <a class="dropdown-item" href="#">RODAS</a>
          <a class="dropdown-item" href="#">LIXAS</a>
          <a class="dropdown-item" href="#">SHAPES</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <div class="dropdown">
        <a class="btn btn-lg text-dark drop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">TÊNIS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">ACESSÓRIOS</a>
    </li>
  </ul>
  <form id="pesquisa" class="position-right mr-3 form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2 col-6" type="search" placeholder="O que você deseja?" aria-label="Pesquisar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<!--FIM NAV-->
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
      <img class="img-thumbnail img-fluid" src="<?php echo "./imagens/".$imagem[1].".jpg"?>" width="250" height="200">
      <img class="img-thumbnail img-fluid" src="<?php echo "./imagens/".$imagem[1].".jpg"?>" width="250" height="200">
    </div>
    <div class="col">
      <img class="img-thumbnail img-fluid" src="<?php echo "./imagens/".$imagem[1].".jpg"?>" width="250" height="200">
      <img class="img-thumbnail img-fluid" src="<?php echo "./imagens/".$imagem[1].".jpg"?>" width="250" height="200">
    </div>
    <div class="col">
      <img class="img-thumbnail img-fluid" src="<?php echo "./imagens/".$imagem[1].".jpg"?>" width="250" height="200">
      <img class="img-thumbnail img-fluid" src="<?php echo "./imagens/".$imagem[1].".jpg"?>" width="250" height="200">
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</main>
<!--INICIO FOOTER-->
<footer>
<div class="container">
  <div class="row">
    <div class="col-4">
    <b><h4 class="mt-4">Formas de entrega:</h4>
      <div class="mt-3">
      <li>PAC</li>
      <li>Sedex</li>
      <li>FedEx</li>
      <li>Correios</li></b>   
    </div>
    </div>   
    <div class="col-4 mt-4">
      <b><h4>Quem nós somos:</h4>
      <p class="ml-2 mt-3">
        Somos uma loja virtual com o objetivo de levar aos clientes a praticidade aliada à elegância e bom gosto.
        Nosso objetivo é que grandes marcas e produtos selecionados criteriosamente cheguem a todos os clientes com ótimos preços e sempre garantindo um alto padrão de qualidade.      
        Seja você também um cliente privilegiado comprando na Binary!</p></b>
    </div>
    <div class="col-4 mt-4">
      <b><h4>Aceitamos:</h4></b>
      <img class="" src=".png" width="100%">
    </div>
  </div>
</div>
</footer>
</body>
</html>
