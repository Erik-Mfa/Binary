<!DOCTYPE html>
<html lang="pr-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Binary</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body >
<!--NAV-->
<nav class="navbar navbar-expand-lg navbar-light bg-white ">
    <a class="navbar-brand mx-auto" href="index.php">
        <img src="imagens/logo_Opcional.png" width="280" height="100" alt="">
    </a> 
</nav>

<div class="d-flex justify-content-center">
    <form action="validation.php"  method="post">
            <h1 class="cor">Preencha os dados de acesso</h1>
                <div class="form-floating">   
                    <label for="txUsuario" class="col-4 col-form-label text-right">Usuário</label> 
                    <input class="border border-success" type="text" name="usuario" id="txUsuario" maxlength="30">
                </div>
                <div class="form-floating">  
                    <label for="txSenha" class="col-4 col-form-label text-right">Senha</label>
                    <input class="border border-success" type="password" name="senha" id="txSenha" maxlength="60">
                </div>
                <div class="d-flex justify-content-center ">
                    <input type="submit" value="Enviar" class="btn btn-outline-success">
                </div>
    </form>
</div>

</body>
</html>