<?php
include_once 'conn.php';

  if(isset($_POST['cadastrarProduto'])){
    $remove = array(".jpg", ".jpeg", ".png");
    $imagemNameExt = $_FILES['newImagem']['name'];
    $imagemName = str_replace($remove, "", $imagemNameExt);

    $wearingType = $_POST['newTipo'];
    $wearingBrand = $_POST['newMarca'];
    $wearingPrice = $_POST['newPreco'];
    $wearingSize = $_POST['newTamanho'];
    $wearingImage = $imagemName;

    $conn = conectar();
    $wearingSql = "INSERT INTO roupas_tb (tipo, marca, preco, tamanho, imagem) 
    VALUES ('$wearingType', '$wearingBrand', '$wearingPrice', '$wearingSize', '$wearingImage')";

    $result = mysqli_query($conn, $wearingSql);

    if (mysqli_affected_rows($conn) > 0){
      echo "Deu boa ";
    }

    /*********************cadastro de imagens ***********************/
    $targetDir = "../imagens/";
    $targetFile = $targetDir . basename($_FILES['newImagem']['name']);
    $ok = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES['newImagem']['tmp_name']);
    
    //verifica se é uma imagem
    if($check !== false){
        echo "É uma imagem da fato - " . $check['mime'] . ". ";
        $ok = 1;
    } else{
        echo "Não é uma imagem. ";
        $ok = 0;
    }

    //verifica se a imagem ja existe
    if (file_exists($targetFile)) {
      echo "A imagem ja existe. ";
      $ok = 0;
    }

    //define o tamanho maximo do arquivo
    if ($_FILES['newImagem']['size'] > 500000) {
      echo "Arquivo muito grande.";
      $ok = 0;
    }

    //define os tipos de arquivos permitidos
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
      echo "Apenas arquivos JPG, JPEG e PNG permitidos. ";
      $ok = 0;
    }

    //se passou por todas as verificações ele faz o upload da imagem
    if ($ok == 0) {
      echo "Seu arquivo não foi enviado.";
      header("Location: ../admin.php");
      } else {
        if (move_uploaded_file($_FILES['newImagem']['tmp_name'], $targetFile)) {
          header("Location: ../admin.php");
          echo "O arquivo ". htmlspecialchars( basename( $_FILES['newImagem']['name'])). " foi enviado com sucesso.";
        } else {
          header("Location: ../admin.php");
          echo "Houve um erro no upload do arquivo.";
        }
    }
}

?>