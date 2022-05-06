<?php  
include_once 'conn.php';

$conn = conectar();

if(isset($_GET['details'])){
$detailsId = $_GET['details'];
$showRoupaDetails = "";

$sqlRoupasDetails = "SELECT * FROM roupas_tb WHERE id='$detailsId'";
if($result = mysqli_query($conn, $sqlRoupasDetails)){
    while($linha = mysqli_fetch_array($result)){
        $idRoupaDetails[] = $linha['id'];
        $tipoRoupaDetails[] = $linha['tipo'];
        $nomeRoupaDetails[] = $linha['nome'];
        $marcaRoupaDetails[] = $linha['marca']; 
        $precoRoupaDetails[] = $linha['preco']; 
        $tamanhoRoupaDetails[] = $linha['tamanho'];
        $imagemRoupaDetails[] = $linha['imagem'];
        $secaoRoupaDetails[] = $linha['secaoRoupas'];
        $promocaoRoupaDetails[] = $linha['promocao'];
        if($secaoRoupaDetails[0] == "roupa"){
            $showRoupaDetails = "mostrarroupa";
        }
    }
}
}

$sqlRoupas = "SELECT * FROM roupas_tb";
if($result = mysqli_query($conn, $sqlRoupas)){
    while($linha = mysqli_fetch_array($result)){
        $idRoupa[] = $linha['id'];
        $tipoRoupa[] = $linha['tipo'];
        $marcaRoupa[] = $linha['marca']; 
        $precoRoupa[] = $linha['preco']; 
        $tamanhoRoupa[] = $linha['tamanho'];
        $imagemRoupa[] = $linha['imagem'];
        $secaoRoupa[] = $linha['secaoRoupas'];
    }
}
?>