<?php 
session_start();
include_once '../../database/skateboard.php';
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
    <a class="navbar-brand mx-auto" href="../../index.php">
        <img src="../../imagens/logo_Opcional.png" width="280" height="100" alt="">
    </a>
</nav>

<div>
    <div class="border">
        <form action="newUser.php"  method="post">
                <h1 class="cor ml-1">Cadastro de usuário: </h1>
                    <div class="ml-2">
                        <div>  
                            <label for="newNome" text-right">Nome completo:</label>
                            <input class="border border-success" type="text" name="newNome" maxlength="60">
                        </div>
                        <div>   
                            <label for="newUsuario" text-right">Usuário:</label> 
                            <input class="border border-success" type="text" name="newUsuario" maxlength="30">
                        </div>
                        <div>  
                            <label for="newSenha" text-right">Senha:</label>
                            <input class="border border-success" type="password" name="newSenha" maxlength="60">
                        </div>
                        <div>  
                            <label for="newNivel" text-right">Nível de acesso:</label>
                            <input class="border border-success" type="number" name="newNivel" maxlength="5">
                        </div>
                        <div>  
                            <label for="newEmail" text-right">Email:</label>
                            <input class="border border-success" type="email" name="newEmail" maxlength="30">
                        </div>
                        <div>
                            <button type="submit" name="cadastrarUsuario" class="btn btn-outline-success">Enviar:</button>
                        </div>
                        <div class="mt-2">
                        <?php
                            if(isset($_GET['mensagemUsuario'])){
                                include_once '../../msg.php';
                                $_GET['mensagemUsuario'];
                                echo mostraMensagem($_GET['mensagemUsuario']);
                            }
                        ?>
                        </div>
                    </div>
        </form>
    </div>
    <div class="my-5 border">
        <form action="newWearing.php"  method="post" enctype="multipart/form-data">
                    <h1 class="cor ml-1">Cadastro de produto: </h1>
                    <div class="ml-2">
                        <div>  
                            <label for="newTipo" text-right">Tipo do produto:</label>
                            <input class="border border-success" type="text" name="newTipoWearing" maxlength="15">
                        </div>
                        <div>   
                            <label for="newMarca" text-right">Marca:</label> 
                            <input class="border border-success" type="text" name="newMarcaWearing" maxlength="20">
                        </div>
                        <div>  
                            <label for="newPreco" text-right">Preço:</label>
                            <input class="border border-success" type="number" name="newPrecoWearing">
                        </div>
                        <div>  
                            <label for="newTamanho" text-right">Tamanho:</label>
                            <input class="border border-success" type="text" name="newTamanhoWearing" maxlength="5">
                        </div>
                        <div>  
                            <label for="newNome" text-right">Nome:</label>
                            <input class="border border-success" type="text" name="newNomeWearing" maxlength="50">
                        </div>
                        <div>  
                            <label for="newPromocao" text-right">Desconto:</label>
                            <input class="border border-success" type="text" name="newPromocaoWearing" maxlength="50">
                        </div>
                        <div class="mb-3 col-3">  
                            <input class="border form-control form-control-sm" type="file" name="newImagemWearing">
                        </div>
                        <div>
                            <button type="submit" name="cadastrarProduto" class="btn btn-outline-success">Enviar:</button>
                        </div>
                        <div class="mt-2">
                            <?php
                            if(isset($_GET['mensagemProduto'])){
                                include_once '../../msg.php';
                                $_GET['mensagemProduto'];
                                echo mostraMensagem($_GET['mensagemProduto']);
                            }
                            ?>
                        </div>

                    </div>
             </form>
    </div>

    <div class="my-5 border">
        <form action="newSkate.php"  method="post" enctype="multipart/form-data">
                    <h1 class="cor ml-1">Cadastro de skate: </h1>
                    <div class="ml-2">
                        <div>  
                            <label for="newTipoSkate" text-right">Tipo do produto:</label>
                            <input class="border border-success" type="text" name="newTipoSkate" maxlength="15">
                        </div>
                        <div>   
                            <label for="newMarcaSkate" text-right">Marca:</label> 
                            <input class="border border-success" type="text" name="newMarcaSkate" maxlength="20">
                        </div>
                        <div>  
                            <label for="newNomeSkate" text-right">Nome:</label>
                            <input class="border border-success" type="text" name="newNomeSkate" maxlength="50">
                        </div>
                        <div>  
                            <label for="newPrecoSkate" text-right">Preço:</label>
                            <input class="border border-success" type="number" name="newPrecoSkate">
                        </div>
                        <div>  
                            <label for="newPromocaoSkate" text-right">Desconto:</label>
                            <input class="border border-success" type="text" name="newPromocaoSkate" maxlength="50">
                        </div>
                        <div class="mb-3 col-3">  
                            <input class="border form-control form-control-sm" type="file" name="newImagemSkate">
                        </div>
                        <div>
                            <button type="submit" name="cadastrarSkate" class="btn btn-outline-success">Enviar:</button>
                        </div>
                        <div class="mt-2">
                            <?php
                            if(isset($_GET['mensagemSkate'])){
                                include_once '../../msg.php';
                                $_GET['mensagemSkate'];
                                echo mostraMensagem($_GET['mensagemSkate']);
                            }
                            ?>
                        </div>
                    </div>
             </form>        
    </div>
</div>

</body>
</html>