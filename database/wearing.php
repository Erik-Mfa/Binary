<?php  
include_once 'conn.php';

$conn = conectar();
$sql = "SELECT * FROM roupas_tb";

if($result = mysqli_query($conn, $sql)){
    while($linha = mysqli_fetch_array($result)){
        $id[] = $linha['id'];
        $tipo[] = $linha['tipo'];
        $marca[] = $linha['marca']; 
        $preco[] = $linha['preco']; 
        $tamanho[] = $linha['tamanho'];
        $imagem[] = $linha['imagem'];
}
}

$sqlTrucks = "SELECT * FROM roupas_tb WHERE tipo='truck'";

if($result = mysqli_query($conn, $sqlTrucks)){
    while($linha = mysqli_fetch_array($result)){
        $imagemTruck[] = $linha['imagem'];
}
}

?>