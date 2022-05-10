<?php 
include_once 'conn.php';

$conn = conectar();

$sqlSkate = "SELECT * FROM skateboard_tb";
if($result = mysqli_query($conn, $sqlSkate)){
    while($linha = mysqli_fetch_array($result)){
        $idSkate[] = $linha['id'];
        $tipoSkate[] = $linha['tipo'];
        $marcaSkate[] = $linha['marca'];
        $imagemSkate[] = $linha['imagem'];
        $nomeSkate[] = $linha['nome'];
        $precoSkate[] = $linha['preco'];
        $secaoSkate[] = $linha['secaoSkate'];
        $promocaoSkate[] = $linha['promocao'];
        }
    }



if(isset($_GET['details'])){
$detailsId = $_GET['details'];
$showSkateDetail = "";
//essa variavel serve só pra não exibir uma mensagem de erro

$sqlSkateDetails = "SELECT * FROM skateboard_tb WHERE id='$detailsId'";
if($result = mysqli_query($conn, $sqlSkateDetails)){
    while($linha = mysqli_fetch_array($result)){
        $tipoSkateDetail[] = $linha['tipo'];
        $marcaSkateDetail[] = $linha['marca'];
        $imagemSkateDetail[] = $linha['imagem'];
        $nomeSkateDetail[] = $linha['nome'];
        $precoSkateDetail[] = $linha['preco'];
        $secaoSkateDetail[] = $linha['secaoSkate'];
        $promocaoSkateDetail[] = $linha['promocao'];
        if($secaoSkateDetail[0] == "skate"){
            $showSkateDetail = "mostrarskate";
        }

        }
    }
}


//itemList Page sql
$listItems = $_GET['tipo'];

switch($listItems){
    case'truck':
        $sqlTrucks = "SELECT * FROM skateboard_tb WHERE tipo='$listItems'";
        if($result = mysqli_query($conn, $sqlTrucks)){
            while($linha = mysqli_fetch_array($result)){
                $imagemItemList[] = $linha['imagem'];
                $idItemList[] = $linha['id'];
                
            }
        }
    break;

    case'rolamento':
        $sqlRolamentos = "SELECT * FROM skateboard_tb WHERE tipo='$listItems'";
        if($result = mysqli_query($conn, $sqlRolamentos)){
            while($linha = mysqli_fetch_array($result)){
                $imagemItemList[] = $linha['imagem'];
                $idItemList[] = $linha['id'];
            }
        }
    break;

    case'roda':
        $sqlRodas = "SELECT * FROM skateboard_tb WHERE tipo='$listItems'";
        if($result = mysqli_query($conn, $sqlRodas)){
            while($linha = mysqli_fetch_array($result)){
                $imagemItemList[] = $linha['imagem'];
                $idItemList[] = $linha['id'];
            }
        }
    break;

    case'lixa':
        $sqlLixas = "SELECT * FROM skateboard_tb WHERE tipo='$listItems'";
        if($result = mysqli_query($conn, $sqlLixas)){
            while($linha = mysqli_fetch_array($result)){
                $imagemItemList[] = $linha['imagem'];
                $idItemList[] = $linha['id'];
            }
        }
    break;

    case'shape':
        $sqlShapes = "SELECT * FROM skateboard_tb WHERE tipo='$listItems'";
        if($result = mysqli_query($conn, $sqlShapes)){
            while($linha = mysqli_fetch_array($result)){
                $imagemItemList[] = $linha['imagem'];
                $idItemList[] = $linha['id'];
            }   
        }
    break;
}
?>