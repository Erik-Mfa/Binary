<?php  
    include_once 'conn.php';

    $conn = conectar();
    $sql = "SELECT * FROM roupas_tb";

    if($result = mysqli_query($conn, $sql)){

    while($linha = mysqli_fetch_array($result)){
        $id[] = $linha['id'];
        $imagem[] = $linha['imagem'];
    }
}

    function salvar_roupas($tipo, $marca, $preco, $tamanho, $imagem)
    {
        $conn = conectar();
        $sql = "INSERT INTO roupas_tb (tipo, marca, preco, tamanho, imagem) 
        VALUES ('$tipo', '$marca', '$preco', '$tamanho', '$imagem')";
        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0)
        {
            return true;
        }

        return false;
    }

    function buscar_roupas()
    {
	    $conn = conectar();
	    $sql = "SELECT * FROM roupas_tb";
	    $result = mysqli_query($conn, $sql);

    	if (mysqli_affected_rows($conn) > 0)
	    {
		    return $result;
	    }
    return null;
    }

    function exibir_roupas()
    {
        $result = buscar_roupas();
        $roupa = mysqli_fetch_assoc($result);
        echo $roupa;
    }

?>