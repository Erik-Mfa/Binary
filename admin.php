<?php session_start()?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Binary - Admin</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body>
<!--NAV-->
<nav class="navbar navbar-expand-lg navbar-light bg-white ">
    <a class="navbar-brand mx-auto" href="index.php">
        <img src="imagens/logo_Opcional.png" width="280" height="100" alt="">
    </a>
</nav>
<div class="text-center fonte">
    <h1>Seja bem vindo, <?php echo $_SESSION['userName'];?>!</h1>
    <h4>Menu do administrador:</h4>
</div>

<div class="border">
    <form action="database/newUser.php"  method="post">
            <h1 class="cor">Cadastro de usuário: </h1>
                <div class="margin-left: 1rem">
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
                </div>
    </form>
</div>
<div class="border">
    <form action="database/newProduct.php"  method="post" enctype="multipart/form-data">
            <h1 class="cor">Cadastro de produto: </h1>
                <div class="margin-left: 1rem">
                    <div>  
                        <label for="newTipo" text-right">Tipo do produto:</label>
                        <input class="border border-success" type="text" name="newTipo" maxlength="15">
                    </div>
                    <div>   
                        <label for="newMarca" text-right">Marca:</label> 
                        <input class="border border-success" type="text" name="newMarca" maxlength="20">
                    </div>
                    <div>  
                        <label for="newPreco" text-right">Preço:</label>
                        <input class="border border-success" type="number" name="newPreco">
                    </div>
                    <div>  
                        <label for="newTamanho" text-right">Tamanho:</label>
                        <input class="border border-success" type="text" name="newTamanho" maxlength="5">
                    </div>
                    <div>  
                        <input class="border" type="file" name="newImagem" id="newImagem">
                    </div>
                    <div>
                        <button type="submit" name="cadastrarProduto" class="btn btn-outline-success">Enviar:</button>
                    </div>
                </div>
    </form>
</div>
</body>
</html>