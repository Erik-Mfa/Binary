<?php
include_once '../../database/conn.php';
include_once '../../database/skateboard.php';

if(isset($_GET['edit'] )){
    $editId = $_GET['edit'];
    $sqlSkateEdit = "SELECT * FROM skateboard_tb WHERE id='$editId'";
    if($result = mysqli_query($conn, $sqlSkateEdit)){
        while($linha = mysqli_fetch_assoc($result)){
            $idSkateEdit[] = $linha['id'];
            $tipoSkateEdit[] = $linha['tipo'];
            $marcaSkateEdit[] = $linha['marca'];
            $nomeSkateEdit[] = $linha['nome'];
            $precoSkateEdit[] = $linha['preco'];
            $promocaoSkateEdit[] = $linha['promocao']; 
            $imagemSkateEdit[] = $linha['imagem'];
            }
        }
    }

 
if(isset($_POST['editar'])){
    $editSkateNome = $_POST['itemEditNome'];
    $editSkateTipo = $_POST['itemEditTipo'];
    $editSkateMarca = $_POST['itemEditMarca'];
    $editSkateParca = $_POST['itemEditPreco'];
    $editSkatePromocao = $_POST['itemEditPromocao'];
    $idItem = $_POST['itemId'];
    //fazer insert
    $conn = conectar();

    $editSkateSql = "UPDATE skateboard_tb SET nome = '$editSkateNome', tipo = '$editSkateTipo', marca = '$editSkateMarca', preco ='$editSkateParca', promocao ='$editSkatePromocao'
    WHERE id = $idItem";

    $result = mysqli_query($conn, $editSkateSql);

    if (mysqli_affected_rows($conn) > 0){
    header('location:editItem.php?mensagemSkate=edicaosucesso&edit='.$idItem);
} else {
    header('location:editItem.php?mensagemSkate=edicaonenhuma&edit='.$idItem);
    }

}

?>