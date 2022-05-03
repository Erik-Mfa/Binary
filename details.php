<?php 
session_start();
include_once "database/wearing.php";
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

</body>
