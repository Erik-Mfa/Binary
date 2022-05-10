<?php
include_once '../database/conn.php';

  if(!isset($_POST['cadastrarSkate']) || empty($_POST['newTipoSkate']) || empty($_POST['newMarcaSkate']) || empty($_POST['newPrecoSkate']) || empty($_POST['newNomeSkate']) || empty($_POST['newPromocaoSkate']) || empty($_FILES['newImagemSkate'])){
    header('location:admin.php?mensagemProduto=cadastroembranco');
  } else {
    $conn = conectar();
    $erro = 0;

    $skateType = $_POST['newTipoSkate'];
    $skateBrand = $_POST['newMarcaSkate'];
    $skatePrice = $_POST['newPrecoSkate'];
    $skateName = $_POST['newNomeSkate'];
    $skatePromocao = $_POST['newPromocaoSkate'];
    $skateImage = $_FILES['newImagemSkate']['name'];

    /*********************cadastro de imagens ***********************/
    $targetDir = "../imagens/";
    $targetFile = $targetDir . basename($_FILES['newImagemSkate']['name']);
    $ok = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES['newImagemSkate']['tmp_name']);
    
    //verifica se é uma imagem
    if($check !== false){
        $ok = 1;
    } else{
        $ok = 0;
    }

    //verifica se a imagem ja existe
    if (file_exists($targetFile)) {
      $fileError = 0;
      $ok = 0;
    }

    //define o tamanho maximo do arquivo
    if ($_FILES['newImagemSkate']['size'] > 500000) {
      $fileError = 1;
      $ok = 0;
    }

    //define os tipos de arquivos permitidos
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
      $fileError = 2;
      $ok = 0;
    }

    //se passou pelas verificações ele faz o upload da imagem
    if ($ok == 0) {
      header("Location: admin.php");
      } else {
        if (move_uploaded_file($_FILES['newImagemSkate']['tmp_name'], $targetFile)) {
          $ok = 2;
        } else {
          $fileError = 3;
        }
    }

    switch($fileError){
      case'0':
        header('location:admin.php?mensagemSkate=imagemexiste');
        break;
      case'1':
        header('location:admin.php?mensagemSkate=imagemgrande');
        break;
      case'2':
        header('location:admin.php?mensagemSkate=formatonaopermitido');
        break;
      case'3':
        header('location:admin.php?mensagemSkate=erroenvioimagem');
        break;
    }

    //se enviou a imagem ele faz o cadastro no banco de dados
    if($ok == 2){
    $skateSql = "INSERT INTO skateboard_tb (tipo, marca, preco, imagem, nome, promocao) 
    VALUES ('$skateType', '$skateBrand', '$skatePrice', '$skateImage', '$skateName', '$skatePromocao')";

    $result = mysqli_query($conn, $skateSql);

    if (mysqli_affected_rows($conn) > 0){
      header('location:admin.php?mensagemSkate=cadastrosucesso');
    } else {
      header('location:admin.php?mensagemSkate=cadastrofracasso');
    }
  } 
  
}

?>