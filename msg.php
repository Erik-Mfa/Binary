<?php
function mostraMensagem($mensagem){
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
            $retorno = "<p class='fonte'>A imagem escolhida já existe!</p>";
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
        case 'cadastrofracasso':
            $retorno = "<p class='fonte'>Houve um erro no cadastro!</p>";
            break;
        case 'edicaosucesso':
            $retorno = "<p class='fonte'>Alteração Feita com sucesso!</p>";
            break;
        case 'edicaonenhuma':
            $retorno = "<p class='fonte'>Nada foi alterado!</p>";
            break;
        default: 
            $retorno = "";
            break;
    }
    return $retorno; 
}

?>