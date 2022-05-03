<?php  
include_once 'conn.php';

$conn = conectar();

$sqlRoupas = "SELECT * FROM roupas_tb";
if($result = mysqli_query($conn, $sqlRoupas)){
    while($linha = mysqli_fetch_array($result)){
        $id[] = $linha['id'];
        $tipo[] = $linha['tipo'];
        $marca[] = $linha['marca']; 
        $preco[] = $linha['preco']; 
        $tamanho[] = $linha['tamanho'];
        $imagem[] = $linha['imagem'];
    }
}
?>