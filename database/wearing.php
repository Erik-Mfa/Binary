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

$sqlRolamentos = "SELECT * FROM roupas_tb WHERE tipo='rolamento'";

if($result = mysqli_query($conn, $sqlRolamentos)){
    while($linha = mysqli_fetch_array($result)){
        $imagemRolamento[] = $linha['imagem'];
}
}

$sqlRodas = "SELECT * FROM roupas_tb WHERE tipo='roda'";

if($result = mysqli_query($conn, $sqlRodas)){
    while($linha = mysqli_fetch_array($result)){
        $imagemRoda[] = $linha['imagem'];
}
}

$sqlLixas = "SELECT * FROM roupas_tb WHERE tipo='lixa'";

if($result = mysqli_query($conn, $sqlLixas)){
    while($linha = mysqli_fetch_array($result)){
        $imagemLixa[] = $linha['imagem'];
}
}

$sqlShapes = "SELECT * FROM roupas_tb WHERE tipo='shape'";

if($result = mysqli_query($conn, $sqlShapes)){
    while($linha = mysqli_fetch_array($result)){
        $imagemShape[] = $linha['imagem'];
}
}
?>