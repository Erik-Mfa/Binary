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

<!-- skateboard edit table -->
<table class="table">
  <thead class="thead-dark">
    <tr class="fonte">
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Marca</th>
      <th scope="col"><a href='admin.php' class='btn btn-outline-success ml-1'>Voltar</a></th>
    </tr>
  </thead>
<?php 
if($result = mysqli_query($conn, $sqlSkate)){
    while($linha = mysqli_fetch_assoc($result)){    
?>
<tr>
  <td><?php echo $linha['id']?></td>
  <td><a href="editItem.php?edit=<?php echo $linha['id'] ?>"><?php echo $linha['nome']?></a></td>
  <td><?php echo $linha['marca']?></td>
  <td><?php echo $linha['tipo']?></td>
</tr> 
 
<?php
  }   
}
?>
</table>



</body>
</html>