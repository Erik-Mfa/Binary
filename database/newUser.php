<?php
include_once 'conn.php';

  if(isset($_POST['cadastrarUsuario']) || empty($_POST['newNome']) || empty($_POST['newUsuario']) || empty($_POST['newSenha']) || empty($_POST['newNivel']) || empty($_POST['newEmail'])){
    header('location:../admin.php?mensagemUsuario=cadastroembranco');
  } else {

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
      header('location:../admin.php?mensagemUsuario=cadastrosucesso');
    } else {
      header('location:../admin.php?mensagemUsuario=cadastrofracasso');
    }
  }

?>