<?php 
session_start();
include_once '../database/skateboard.php';
?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Binary - Admin</title>
<link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body>
<!--NAV-->
<nav class="navbar navbar-expand-lg navbar-light bg-white ">
    <a class="navbar-brand mx-auto" href="../index.php">
        <img src="../imagens/logo_Opcional.png" width="280" height="100" alt="">
    </a>
</nav>
<?php 
if(isset($_GET['edit'])){
    $editId = $_GET['edit'];
    $sqlSkateEdit = "SELECT * FROM skateboard_tb WHERE id='$editId'";
    if($result = mysqli_query($conn, $sqlSkateEdit)){
        while($linha = mysqli_fetch_array($result)){
            $tipoSkateEdit[] = $linha['tipo'];
            $marcaSkateEdit[] = $linha['marca'];
            $nomeSkateEdit[] = $linha['nome'];
            $precoSkateEdit[] = $linha['preco'];
            $promocaoSkateEdit[] = $linha['promocao']; 
            $imagemSkateEdit[] = $linha['imagem'];
            }
        }
    }
?>

<div class='d-flex justify-content-center fonte'>
    <ul class='list-group list-group-flush '>
        <li class='list-group-item'>
            <img class='img-fluid' src='../imagens/<?php   echo $imagemSkateEdit[0]; ?>' width='500' height='500'>
        </li>
        <li class='list-group-item'>
             <h2><?php echo $nomeSkateEdit[0] ?></h2><br>
        </li>
        <li class='list-group-item'>
             <h2><?php echo $tipoSkateEdit[0] ?></h2><br>
        </li>
        <li class='list-group-item'>
            <h2><?php echo $marcaSkateEdit[0] ?></h2>
        </li>
        <li class='list-group-item'>
            <h2><?php echo $precoSkateEdit[0] ?></h2><br>
        </li>
    </ul>
</div>

</body>
</html>