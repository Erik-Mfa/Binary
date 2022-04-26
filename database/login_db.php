<?php
include_once 'conn.php';

$conn = conectar();
$usuario = $_POST['usuario'];
$senha 	 = $_POST['senha'];

  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: ../login.php"); exit;
  }

$sql = "SELECT id, nome, nivel FROM usuarios_tb WHERE (usuario = '".$usuario ."') AND (senha = '". $senha ."') LIMIT 1";
$query = mysqli_query($conn, $sql);

  if (mysqli_num_rows($query) != 1) {
      echo "Login inválido!"; exit;
  } else {
      $resultado = mysqli_fetch_assoc($query);

      session_start();

      $_SESSION['userName'] = $resultado['nome'];
      $_SESSION['userLevel'] = $resultado['nivel'];

      header("Location: ../index.php"); exit;
  }
  ?>