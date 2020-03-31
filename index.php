<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body >
    <div id="wrap">
        <form method="post" action='validar/mostrar-pedido.php' id="delivery-form" >
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Monte sua refeição</legend>
                <div class='field_container'>
                <label >Acompanhamento</label>
                <label class='radiolabel'><input type="radio" name="acompanhamento"  value="Arroz"  />Arroz branco</label><br/>
                <label class='radiolabel'><input type="radio" name="acompanhamento"  value="Macarrao" name="acompanhamento"  />Macarrão alho-e-óleo</label><br/>
                <label class='radiolabel'><input type="radio" name="acompanhamento"  value="Farofa"  />Farofa de calabreza</label><br/>
                <label class='radiolabel'><input type="radio" name="acompanhamento"  value="Salada"  />Salada de folhas</label><br/>
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
               </div>
              </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                <legend>Informações do cliente</legend>
                    <label for='name'>Nome completo</label>
                    <input name="nome" type="text" id="name"/>
                    <br/>
                    <label for='address'>Endereço de entrega</label>
                    <input name="endereco" type="text" id="address" />
                    <br/>
                    <label for='phonenumber'>Telefone</label>
                    <input name="telefone" type="text"  id="phonenumber"/>
                    <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' name="enviado" value='Realizar pedido'  />
        </div>  
       </form>
	</div>

</body>
</html>