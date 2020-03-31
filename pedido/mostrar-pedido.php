<style>
    p {
        margin: 0;
    }
    * {
        font-family: monospace;
        box-sizing: border-box;
    }
    .body {
        width: 350px;
        margin: 0 auto;
        padding: 30px;
        border: 1px dashed rgba(0,0,0,0.5);
        position: relative;
    }
    .comanda {
        display: block;
        position: absolute;
        left: 5px;
        top: 5px;
        font-size: 12px;
        font-family: monospace;
    }

</style>

<div class="body">
    <span class="comanda">COMANDA DE ENTREGA</span>
<?php

// Importar funcoes e variaveis
require_once ( "../validar/variaveis.php" );
require_once ( "../validar/funcoes.php" );

// Validar se o usuário chegou a página via formulário
// e limpar post
if(formEnviado($_POST)){ 

    gerarMensagensErro($dados);
            
    if(empty($mensagem_erro)) {

        echo '<h1>ENTREGA EM DOMICÍLIO</h1>';
        echo '<h4>Acompanhamento</h4>';
        echo '<p>' . $_POST['acompanhamento'] . '</p>';

        echo '<h4>Prato principal</h4>';
        echo '<p>' . $_POST['prato_principal'] . '</p>';

        echo '<h4>Adicionais</h4>';
        echo '<ul>';
            if(isset($_POST['batata-frita'])) {
                echo '<li>' . $_POST['batata-frita'] . '</li>';
            }
            if(isset($_POST['batata-palha'])) {
                echo '<li>' . $_POST['batata-palha'] . '</li>';
            }
            if(isset($_POST['oregano'])) {
                echo '<li>' . $_POST['oregano'] . '</li>';
            }
            if(isset($_POST['vinagrete'])) {
                echo '<li>' . $_POST['vinagrete'] . '</li>';
            }
            if(isset($_POST['tomate'])) {
                echo '<li>' . $_POST['tomate'] . '</li>';
            }
            if(isset($_POST['cebola'])) {
                echo '<li>' . $_POST['cebola'] . '</li>';
            }
        echo '</ul>';

        echo '<h4>Dados da entrega</h4>';
        echo '<p>Nome: ' . $_POST['nome'] . '</p>';
        echo '<p>Endereço de entrega: ' . $_POST['endereco'] . '</p>';
        echo '<p>Telefone de contato: ' . $_POST['telefone'] . '</p>';

    } else {
        
        $url = '../index.php?';

        foreach($mensagem_erro as $i => $v) {
            $url .= "$i=$v&";
        }

        $url = substr($url, 0, -1); 

        header("Location: $url");

    }

}



/* var_dump( $dados );
var_dump( $mensagem_erro ); */

?>
</div>