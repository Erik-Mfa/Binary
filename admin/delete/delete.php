<?php 
include_once '../../database/conn.php';
include_once '../../database/skateboard.php';

if(isset($_POST['deletar'])){
    $idItem = $_POST['itemId'];
    //fazer insert
    $conn = conectar();

    $deleteSkateSql = "DELETE FROM skateboard_tb WHERE id = $idItem";

    $result = mysqli_query($conn, $deleteSkateSql);

    if (mysqli_affected_rows($conn) > 0){
    header('location:deleteItem.php?mensagemSkate=deletesucesso&delete='.$idItem);
} else {
    header('location:deleteItem.php?mensagemSkate=deletenenhuma&delete='.$idItem);
}

}

?>