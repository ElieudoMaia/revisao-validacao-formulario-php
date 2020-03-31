<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body >
    <div id="wrap">
        <form method="post" action='pedido/mostrar-pedido.php' id="delivery-form" >
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Monte sua refeição</legend>
                <div class='field_container'>
                <label >Acompanhamento</label>
                <label class='radiolabel'><input type="radio" name="acompanhamento" value="Arroz" />Arroz branco</label><br/>
                <label class='radiolabel'><input type="radio" name="acompanhamento" value="Macarrão" />Macarrão alho-e-óleo</label><br/>
                <label class='radiolabel'><input type="radio" name="acompanhamento" value="Farofa" />Farofa de calabreza</label><br/>
                <label class='radiolabel'><input type="radio" name="acompanhamento" value="Salada" />Salada de folhas</label><br/>
                <?php
                    if(isset($_GET['acompanhamento_vazio'])) {
                        echo '<span class="error">' . $_GET['acompanhamento_vazio'] . '</span>';
                    }
                    ?>
                </div>
                
                <div class='field_container'>
                    <label for="flavor">Prato principal:</label >
                    <select id="flavor" name='prato_principal' >
                        <option value="nenhum">Escolha uma opção</option>
                        <option value="bife">Bife à parmegiana</option>
                        <option value="frango">Frango à parmegiana</option>
                        <option value="lasanha">Lasanha de brócolis</option>
                        <option value="peixe">Peixe frito</option>
                   </select>
                <?php
                    if(isset($_GET['prato_principal_vazio'])) {
                        echo '<span class="error">' . $_GET['prato_principal_vazio'] . '</span>';
                    }
                    ?>
                </div>

                <div class='field_container'>
                    <label >Adicionais:</label>
                    <label><input type="checkbox" name="batata-frita" value="Batata-frita" />Batata-frita</label>
                    <label><input type="checkbox" name="batata-palha" value="Batata-palha" />Batata-palha</label>
                    <label><input type="checkbox" name="oregano" value="Oregano" />Orégano</label>
                    <label><input type="checkbox" name="vinagrete" value="Vinagrete" />Vinagrete</label>
                    <label><input type="checkbox" name="tomate" value="Tomate" />Tomate</label>
                    <label><input type="checkbox" name="cebola" value="Cebola" />Cebola</label>
               </div>
               <div class='field_container'>
                   <label class="inlinelabel"><input name="agree" value="agree" type="checkbox" id="agree" /> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
            
                <?php
                    if(isset($_GET['agree_vazio'])) {
                        echo '<span class="error">' . $_GET['agree_vazio'] . '</span>';
                    }
                    ?>
                </div>

              </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                <legend>Informações do cliente</legend>
                    <label for='name'>Nome completo</label>
                    <input name="nome" type="text" id="name"/>
                    <?php
                        if(isset($_GET['nome_vazio'])) {
                            echo '<span class="error">' . $_GET['nome_vazio'] . '</span>';
                        }
                    ?>
                    <br/>
                    <label for='address'>Endereço de entrega</label>
                    <input name="endereco" type="text" id="address" />
                    <?php
                        if(isset($_GET['endereco_vazio'])) {
                            echo '<span class="error">' . $_GET['endereco_vazio'] . '</span>';
                        }
                    ?>
                    <br/>
                    <label for='phonenumber'>Telefone</label>
                    <input name="telefone" type="text"  id="phonenumber"/>
                    <?php
                        if(isset($_GET['telefone_vazio'])) {
                            echo '<span class="error">' . $_GET['telefone_vazio'] . '</span>';
                        }
                    ?>
                    <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' name="enviado" value='Realizar pedido'  />
        </div>  
       </form>
	</div>

</body>
</html>