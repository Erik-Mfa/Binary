<?php
include_once '../../database/conn.php';

  if(!isset($_POST['cadastrarProduto']) || empty($_POST['newTipoWearing']) || empty($_POST['newMarcaWearing']) || empty($_POST['newPrecoWearing']) || empty($_POST['newTamanhoWearing']) || empty($_POST['newNomeWearing']) || empty($_FILES['newImagemWearing'])){
    header('location:new.php?mensagemProduto=cadastroembranco');
  } else {
    $conn = conectar();
    $erro = 0;

    $wearingType = $_POST['newTipoWearing'];
    $wearingBrand = $_POST['newMarcaWearing'];
    $wearingPrice = $_POST['newPrecoWearing'];
    $wearingSize = $_POST['newTamanhoWearing'];
    $wearingName = $_POST['newNomeWearing'];
    $wearingPromocao = $_POST['newPromocaoWearing'];
    $wearingImage = $_FILES['newImagem']['nameWearing'];

    /*********************cadastro de imagens ***********************/
    $targetDir = "../../imagens/";
    $targetFile = $targetDir . basename($_FILES['newImagemWearing']['name']);
    $ok = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES['newImagemWearing']['tmp_name']);
    
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
    if ($_FILES['newImagemWearing']['size'] > 500000) {
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
      header("Location: new.php");
      } else {
        if (move_uploaded_file($_FILES['newImagemWearing']['tmp_name'], $targetFile)) {
          $ok = 2;
        } else {
          $fileError = 3;
        }
    }

    switch($fileError){
      case'0':
        header('location:new.php?mensagemProduto=imagemexiste');
        break;
      case'1':
        header('location:new.php?mensagemProduto=imagemgrande');
        break;
      case'2':
        header('location:new.php?mensagemProduto=formatonaopermitido');
        break;
      case'3':
        header('location:new.php?mensagemProduto=erroenvioimagem');
        break;
    }

    //se enviou a imagem ele faz o cadastro no banco de dados
    if($ok == 2){
    $wearingSql = "INSERT INTO roupas_tb (tipo, marca, preco, tamanho, imagem, nome, promocao) 
    VALUES ('$wearingType', '$wearingBrand', '$wearingPrice', '$wearingSize', '$wearingImage', '$wearingName', '$wearingPromocao')";

    $result = mysqli_query($conn, $wearingSql);

    if (mysqli_affected_rows($conn) > 0){
      header('location:new.php?mensagemProduto=cadastrosucesso');
    } else {
      header('location:new.php?mensagemProduto=cadastrofracasso');
    }
  } 
  
}



?>