<?php
include_once '../database/conn.php';

$conn = conectar();

if(isset($_GET['tipo'])){
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
    }
?>