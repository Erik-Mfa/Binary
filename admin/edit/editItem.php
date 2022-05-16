<?php 
session_start();
include_once '../../database/skateboard.php';
include_once 'editSql.php';
?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Binary - Admin</title>
<link rel="stylesheet" href="../../styles.css">
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body>
<!--NAV-->
<nav class="navbar navbar-expand-lg navbar-light bg-white ">
    <a class="navbar-brand mx-auto" href="../index.php">
        <img src="../../imagens/logo_Opcional.png" width="280" height="100" alt="">
    </a>
</nav>

<div class='d-flex justify-content-center fonte'>
    <ul class='list-group list-group-flush '>
        <form action="editSql.php" method="post">
            <li class='list-group-item d-flex justify-content-center'>
                <img class='img-fluid' src='../../imagens/<?php   echo $imagemSkateEdit[0]; ?>' width='300' height='300'>
            </li>
            <li class='list-group-item d-flex justify-content-center'>
                <input value="<?php echo $nomeSkateEdit[0] ?>" type="text" name="itemEditNome"><br>
            </li>
            <li class='list-group-item d-flex justify-content-center'>
                <input value="<?php echo $tipoSkateEdit[0] ?>" name="itemEditTipo"><br>
            </li>
            <li class='list-group-item d-flex justify-content-center'>
                <input value="<?php echo $marcaSkateEdit[0] ?>" name="itemEditMarca"> <br>
            </li>
            <li class='list-group-item d-flex justify-content-center'>
                <input value="<?php echo $precoSkateEdit[0] ?>" name="itemEditPreco"> <br>
            </li>
            <li class='list-group-item d-flex justify-content-center'>
                <input value="<?php echo $promocaoSkateEdit[0] ?>" name="itemEditPromocao"> <br>
            </li>
            <input type="hidden" id="hiddenField" value="<?php echo $idSkateEdit[0] ?>" name="itemId">
            <li class='d-flex justify-content-center mb-5 mt-5'>
                <input type="submit" value="Editar" class="btn btn-outline-success mr-1" name="editar">
                <a href='edit.php' class='btn btn-outline-success ml-1'>Voltar</a>
            </li>
        </form>
    </ul>
</div>
<div class='d-flex justify-content-center'>
<?php
    if(isset($_GET['mensagemSkate'])){
        include_once '../../msg.php';
        $_GET['mensagemSkate'];
        echo mostraMensagem($_GET['mensagemSkate']);
    }
?>
</div>
</body>
</html>