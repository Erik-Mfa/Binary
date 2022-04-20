<?php
include_once 'database/conn.php';

$conn = conectar();
$usuario = $_POST['usuario'];
$senha 	 = $_POST['senha'];

  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: login.php"); exit;
  }

$sql = "SELECT id, nome, nivel FROM usuarios_tb WHERE (usuario = '".$usuario ."') AND (senha = '". $senha ."') LIMIT 1";
$query = mysqli_query($conn, $sql);
echo $sql;


  if (mysqli_num_rows($query) != 1) {
      echo "Login inválido!"; exit;
  } else {
      $resultado = mysqli_fetch_assoc($query);

      if (!isset($_SESSION)) session_start();

      $_SESSION['userId'] = $resultado['id'];
      $_SESSION['userName'] = $resultado['nome'];
      $_SESSION['userLevel'] = $resultado['nivel'];

      // Redireciona o visitante
      header("Location: index.php"); exit;

  }
?>