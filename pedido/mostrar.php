<?php

// Importar funcoes e variaveis
require_once ( "../validar/variaveis.php" );
require_once ( "../validar/funcoes.php" );

// Validar se o usuário chegou a página via formulário
// e limpar post
formEnviado($_POST);

gerarMensagensErro($dados);

var_dump( $dados );
var_dump( $mensagem_erro );

?>