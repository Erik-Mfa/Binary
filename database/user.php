<?php
include_once 'conn.php';

/**Formulário para cadastro de novo usuário
 * ------------------
 * formulario é enviado porem consulta ao banco de dados não acontece
 * conflito com o login (no qual foi movido para outra página)
 * ****verificar variaveis
 */

  if(!isset($_POST['cadastrarUsuario'])){
    $userName = $_POST['newNome'];
    $user = $_POST['newUser'];
    $userPassword = $_POST['newSenha'];
    $userAccess = $_POST['newNivel'];
    $userEmail =  $_POST['newEmail'];

    function new_User($userName, $user, $userPassword, $userAccess, $userEmail)
      {
          $conn = conectar();
          $userSql = "INSERT INTO usuarios_tb (nome, usuario, senha, email, nivel) 
          VALUES ('$userName', '$user', '$userPassword', '$userEmail', '$userAccess')";

          $result = mysqli_query($conn, $userSql);

          if (mysqli_affected_rows($conn) > 0)
          {
              echo "Deu boa";
          }

          echo "Deu ruim :(";
      }

  }

?>