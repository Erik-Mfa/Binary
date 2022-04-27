<?php
include_once 'conn.php';

  if(!isset($_POST['cadastrarProduto']) || empty($_POST['newTipo']) || empty($_POST['newMarca']) || empty($_POST['newPreco']) || empty($_POST['newTamanho']) || empty($_POST['newNome']) || empty($_FILES['newImagem'])){
    header('location:../admin.php?mensagemProduto=cadastroembranco');
  } else {
    $conn = conectar();
    $erro = 0;

    $wearingType = $_POST['newTipo'];
    $wearingBrand = $_POST['newMarca'];
    $wearingPrice = $_POST['newPreco'];
    $wearingSize = $_POST['newTamanho'];
    $wearingName = $_POST['newNome'];
    $wearingImage = $_FILES['newImagem']['name'];

    /*********************cadastro de imagens ***********************/
    $targetDir = "../imagens/";
    $targetFile = $targetDir . basename($_FILES['newImagem']['name']);
    $ok = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES['newImagem']['tmp_name']);
    
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
    if ($_FILES['newImagem']['size'] > 500000) {
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
      header("Location: ../admin.php");
      } else {
        if (move_uploaded_file($_FILES['newImagem']['tmp_name'], $targetFile)) {
          $ok = 2;
        } else {
          $fileError = 3;
        }
    }

    switch($fileError){
      case'0':
        header('location:../admin.php?mensagemProduto=imagemexiste');
        break;
      case'1':
        header('location:../admin.php?mensagemProduto=imagemgrande');
        break;
      case'2':
        header('location:../admin.php?mensagemProduto=formatonaopermitido');
        break;
      case'3':
        header('location:../admin.php?mensagemProduto=erroenvioimagem');
        break;
    }

    //se enviou a imagem ele faz o cadastro no banco de dados
    if($ok == 2){
    $wearingSql = "INSERT INTO roupas_tb (tipo, marca, preco, tamanho, imagem, nome) 
    VALUES ('$wearingType', '$wearingBrand', '$wearingPrice', '$wearingSize', '$wearingImage', '$wearingName')";

    $result = mysqli_query($conn, $wearingSql);

    if (mysqli_affected_rows($conn) > 0){
      header('location:../admin.php?mensagemProduto=cadastrosucesso');
    } else {
      header('location:../admin.php?mensagemProduto=cadastrofracasso');
    }
  } 
  
}



?>