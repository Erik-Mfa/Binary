<?php session_start()?>
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
<div class="text-center fonte">
    <h1>Seja bem vindo, <?php echo $_SESSION['userName'];?>!</h1>
    <h4>Menu do administrador:</h4>
    <a class="btn btn-outline-success mt-2 mb-2" href="edit/edit.php">Editar Produtos</a>
    <a class="btn btn-outline-success mt-2 mb-2" href="new/new.php">Cadastrar Produtos</a>
</div>



</body>
</html>