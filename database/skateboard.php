<?php 
include_once 'conn.php';

$conn = conectar();

if(isset($_GET['details'])){
$detailsId = $_GET['details'];

$sqlDetails = "SELECT * FROM skateboard_tb WHERE id='$detailsId'";
if($result = mysqli_query($conn, $sqlDetails)){
    while($linha = mysqli_fetch_array($result)){
        $tipoDetail[] = $linha['tipo'];
        $marcaDetail[] = $linha['marca'];
        $imagemDetail[] = $linha['imagem'];
        $nomeDetail[] = $linha['nome'];
        $precoDetail[] = $linha['preco'];

        }
    }
}

$sqlTrucks = "SELECT id, imagem FROM skateboard_tb WHERE tipo='truck'";
if($result = mysqli_query($conn, $sqlTrucks)){
    while($linha = mysqli_fetch_array($result)){
        $imagemTruck[] = $linha['imagem'];
        $idTruck[] = $linha['id'];
        
    }
}

$sqlRolamentos = "SELECT id, imagem FROM skateboard_tb WHERE tipo='rolamento'";
if($result = mysqli_query($conn, $sqlRolamentos)){
    while($linha = mysqli_fetch_array($result)){
        $imagemRolamento[] = $linha['imagem'];
        $idRolamento[] = $linha['id'];
    }
}

$sqlRodas = "SELECT id, imagem FROM skateboard_tb WHERE tipo='roda'";
if($result = mysqli_query($conn, $sqlRodas)){
    while($linha = mysqli_fetch_array($result)){
        $imagemRoda[] = $linha['imagem'];
        $idRoda[] = $linha['id'];
    }
}

$sqlLixas = "SELECT id, imagem FROM skateboard_tb WHERE tipo='lixa'";
if($result = mysqli_query($conn, $sqlLixas)){
    while($linha = mysqli_fetch_array($result)){
        $imagemLixa[] = $linha['imagem'];
        $idLixa[] = $linha['id'];
    }
}

$sqlShapes = "SELECT id, imagem FROM skateboard_tb WHERE tipo='shape'";
if($result = mysqli_query($conn, $sqlShapes)){
    while($linha = mysqli_fetch_array($result)){
        $imagemShape[] = $linha['imagem'];
        $idShape[] = $linha['id'];
    }   
}
?>