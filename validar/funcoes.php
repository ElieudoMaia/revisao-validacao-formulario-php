<?php

// Limpar dados para evitar possíveis scripts
function __e($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
function limparVetor($varPost) {
    $arrayLimpo = [];
    foreach ($varPost as $indice => $valor) {
        $arrayLimpo[$indice] = __e($valor);
    }
    return $arrayLimpo;
}

// Verificar se o formulário foi enviado
function formEnviado($postArray) {
    global $dados;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Limpar post
        $dados = limparVetor($postArray);
        return true;
    } else {
        header('Location: ../index.php');
        die();
    }
}

// Criar mensagem de erro
function gerarMensagensErro($postArray) {
    global $mensagem_erro;

    if(!isset($postArray['acompanhamento'])) {
        $mensagem_erro["acompanhamento_vazio"] = "Informe o acompanhamento";
    }
    
    if($postArray['prato_principal'] == 'nenhum') {
        $mensagem_erro["prato_principal_vazio"] = "Informe o prato principal";
    }

    if(!isset($postArray['agree'])) {
        $mensagem_erro["agree_vazio"] = "Confirme seu pedido";
    }
    
    if($postArray['nome'] == '') {
        $mensagem_erro["nome_vazio"] = "Informe seu nome";
    }
    if($postArray['endereco'] == '') {
        $mensagem_erro["endereco_vazio"] = "informe o endereço de entrega";
    }
    if($postArray['telefone'] == '') {
        $mensagem_erro["telefone_vazio"] = "informe o seu número de telefone";
    }

}
