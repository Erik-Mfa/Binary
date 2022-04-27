<?php
function mostraErro($mensagem){
    switch($mensagem){
        case 'cadastroembranco':
            $retorno = "<p class='fonte'>Campos em branco!</p>";
            break;
        case 'cadastrosucesso':
            $retorno = "<p class='fonte'>Cadastro feito com sucesso!</p>";
            break;
        case 'naoeimagem':
            $retorno = "<p class='fonte'>O arquivo escolhido não é uma imagem!</p>";
            break;
        case 'imagemexiste':
            $retorno = "<p class='fonte'>A imagem ja existe!</p>";
            break;
        case 'imagemgrande':
            $retorno = "<p class='fonte'>A imagem ultrapassa o limite de tamanho!</p>";
            break;
        case 'formatonaopermitido':
            $retorno = "<p class='fonte'>O formato do arquivo escolhido não é permitido!</p>";
            break;
        case 'erroenvioimagem':
            $retorno = "<p class='fonte'>Houve um erro no upload da imagem!</p>";
            break;
        default: 
            $retorno = "";
            break;
    }
    return $retorno; 
}

?>