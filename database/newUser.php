<?php
include_once 'conn.php';

  if(isset($_POST['cadastrarUsuario'])){
    $userName = $_POST['newNome'];
    $user = $_POST['newUsuario'];
    $userPassword = $_POST['newSenha'];
    $userAccess = $_POST['newNivel'];
    $userEmail =  $_POST['newEmail'];

    $conn = conectar();
    $userSql = "INSERT INTO usuarios_tb (nome, usuario, senha, email, nivel) 
    VALUES ('$userName', '$user', '$userPassword', '$userEmail', '$userAccess')";

    $result = mysqli_query($conn, $userSql);

    if (mysqli_affected_rows($conn) > 0){
      echo "Deu boa";
    }
  }

?>