<!DOCTYPE html>
<html>
    <head>
        <title>Bilheteira</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include 'Menu.php';
        ?>
        
        <div class="imagem-inicial-grande">
            <img class="imagem-video-medio" src="Imagens-Paginas/golfinho.jpg" alt=""/>
        </div>
        
        
        <div class="centro-pagina">
            <h1 class="titulo">Bilheteira</h1>
            <p class="descricao">Adquira já os seus bilhetes, assim evita as filas e a espera para entrar no zoo</p>
            <p class="descricao"><b>Nota:</b> A compra dos bilhetes online confere um desconto de 5% no valor de cada bilhete.</p>
            <div class="espacamento-2"></div>
            <div class="centro-pagina">
                <table class="tabela-completa-2">
                    <tr class="linha-meio borda-topo">
                        <td class="divisao-direita">CRIANÇA (3 - 12 ANOS)</td>
                        <td>13,78 €</td>
                        <td class="alinhar-direita">
                            <button id="menosqtdcrianca" class="botao-quantidade">&#10134;</button>
                            <a id="qtdcrianca" class="quantidade">0</a>
                            <button id="maisqtdcrianca" class="botao-quantidade">&#10133;</button>
                        </td>
                    </tr>
                    <tr class="linha-meio">
                        <td class="divisao-direita">ADULTO (13 - 64 ANOS)</td>
                        <td>21,38 €</td>
                        <td class="alinhar-direita">
                            <button id="menosqtdadulto" class="botao-quantidade">&#10134;</button>
                            <a id="qtdadulto" class="quantidade">0</a>
                            <button id="maisqtdadulto" class="botao-quantidade">&#10133;</button>
                        </td>
                    </tr>
                    <tr class="borda-fundo">
                        <td class="divisao-direita">SÉNIOR (+65 ANOS)</td>
                        <td>15,20 €</td>
                        <td class="alinhar-direita">
                            <button id="menosqtdsenior" class="botao-quantidade">&#10134;</button>
                            <a id="qtdsenior" class="quantidade">0</a>
                            <button id="maisqtdsenior" class="botao-quantidade">&#10133;</button>
                        </td>
                    </tr>
                    <tr class="nao-mudar-cor-1">
                        <td></td>
                        <th class="alinhar-direita">Total:</th>
                        <td id="agregadototal" class="alinhar-direita">0€ c/iva</td>
                    </tr>
                </table>
                
                <script>
                //crianca--------

                function adicionarValorCrianca() {
                    let el = document.getElementById("qtdcrianca");
                    let valor = parseInt(el.text);
                    console.log(valor);
                    valor += 1;
                    el.text = valor;
                    atualizarTotal();
                }
                elemento = document.getElementById("maisqtdcrianca");
                elemento.addEventListener("click", adicionarValorCrianca); 

                function removerValorCrianca() {
                    let el = document.getElementById("qtdcrianca");
                    let valor = parseInt(el.text);
                    console.log(valor);
                    valor -= 1;
                    if(valor<0){
                        valor=0;
                    }
                    el.text = valor;
                    atualizarTotal();
                }
                elemento = document.getElementById("menosqtdcrianca");
                elemento.addEventListener("click", removerValorCrianca); 


                //adulto--------------

                function adicionarValorAdulto() {
                    let el = document.getElementById("qtdadulto");
                    let valor = parseInt(el.text);
                    console.log(valor);
                    valor += 1;
                    el.text = valor;
                    atualizarTotal();
                }
                elemento = document.getElementById("maisqtdadulto");
                elemento.addEventListener("click", adicionarValorAdulto); 

                function removerValorAdulto() {
                    let el = document.getElementById("qtdadulto");
                    let valor = parseInt(el.text);
                    console.log(valor);
                    valor -= 1;
                    if(valor<0){
                        valor=0;
                    }
                    el.text = valor;
                    atualizarTotal();
                }
                elemento = document.getElementById("menosqtdadulto");
                elemento.addEventListener("click", removerValorAdulto); 


                //senior------------

                function adicionarValorSenior() {
                    let el = document.getElementById("qtdsenior");
                    let valor = parseInt(el.text);
                    console.log(valor);
                    valor += 1;
                    el.text = valor;
                    atualizarTotal();
                }
                elemento = document.getElementById("maisqtdsenior");
                elemento.addEventListener("click", adicionarValorSenior); 

                function removerValorSenior() {
                    let el = document.getElementById("qtdsenior");
                    let valor = parseInt(el.text);
                    console.log(valor);
                    valor -= 1;
                    if(valor<0){
                        valor=0;
                    }
                    el.text = valor;
                    atualizarTotal();
                }
                elemento = document.getElementById("menosqtdsenior");
                elemento.addEventListener("click", removerValorSenior); 


                function atualizarTotal() {
                    let total = 0;

                    const totalcrianca = 13.78;
                    let el = document.getElementById("qtdcrianca");
                    let valor = parseInt(el.text);
                    total = valor * totalcrianca;

                    const adulto = 21.38;
                    let el1 = document.getElementById("qtdadulto");
                    let valor1 = parseInt(el1.text);
                    total += valor1 * adulto;

                    const senior = 15.20;
                    let el2 = document.getElementById("qtdsenior");
                    let valor2 = parseInt(el2.text);
                    total += valor2 * senior;

                    console.log(total);
                   const totalcstr = document.getElementById("agregadototal").textContent = total.toFixed(2)+'€ c/iva';
                }
             </script>
                
                <div class="espacamento-2"></div>
                <div class="titulo-2">Dados Pessoais</div>
                <form action="" name="dados-pessoais" method="post" onsubmit="return valida(this)">
                <table class="tabela-completa-2 nao-mudar-cor pouco-espaco">
                    <tr class="linha-meio borda-topo">
                        <td class="divisao-direita alinhar-direita tamanho-25">Nome Completo</td>
                        <td>
                            <div class="alinhar-esquerda">
                            <input class="input-grande" style="width: 85%;" type="text" id="nomecompleto" name="nomecompleto" placeholder="Joana Damásio">
                            </div>
                        </td>
                    </tr>
                    <tr class="linha-meio">
                        <td class="divisao-direita alinhar-direita tamanho-25">Email</td>
                        <td>
                            <div class="alinhar-esquerda">
                            <input class="input-grande" style="width: 85%;" type="email" id="email" name="email" placeholder="Joana.Damasio@gmail.com">
                            </div>
                        </td>
                    </tr>
                    <tr class="linha-meio">
                        <td class="divisao-direita alinhar-direita tamanho-25">NIF</td>
                        <td>
                            <div class="alinhar-esquerda">
                            <input class="input-grande" style="width: 25%;" type="number" id="nif" name="nif" placeholder="34765432">
                            </div>
                        </td>
                    </tr>
                    <tr class="linha-meio">
                        <td class="divisao-direita alinhar-direita tamanho-25">Telemovel</td>
                        <td>
                            <div class="alinhar-esquerda">
                            <input class="input-grande" style="width: 25%;" type="number" id="ntelemovel" name="ntelefone" placeholder="914826193">
                            </div>
                        </td>
                    </tr>
                    <tr class="borda-fundo">
                        <td class="divisao-direita alinhar-direita tamanho-25">País</td>
                        <td>
                            <div class="alinhar-esquerda">
                                <input class="input-grande" style="width: 25%;" list="paises" id="pais" name="pais" placeholder="Portugal" autocomplete="on">
                                <datalist id="paises">
                                    <option value="Portugal">
                                    <option value="Espanha">
                                    <option value="França">
                                    <option value="Brasil">
                                </datalist>
                            </div>
                        </td>
                    </tr>
                </table>
                
                <div class="pagina-completa">
                    <input class="botao-grande-direita botao-classes-amarelo" style="float: left; margin-left: 25%;" type="reset" value="Limpar">
                    <input class="botao-grande-direita botao-classes-amarelo" style="" type="submit" value="Avançar para o Pagamento">
                </div>
                <div class="espacamento"></div>
                </form>
                
                <script>
                    function valida ()
                    {
                        if(document.getElementById("nomecompleto").value.length < 3){
                            alert('Por favor, preencha o campo do nome');
                            erronome();
                            return false;
                        }
                        else if(document.getElementById("email").value.length < 5){
                            alert('Por favor, preencha o campo do email');
                            erroemail();
                            return false;
                            var emailid = document.getElementById("email").value;
                            atpos = emailid.indexOf("@");
                            dotpos = emailid.lastIndexOf(".");

                            if (atpos <1 || (dotpos-atpos < 2))
                            { 
                                alert("Por favor introduza um email correto");
                                erroemail();
                                return false;
                            }
                            return (true);
                        }
                        else if(document.getElementById("nif").value.length < 8){
                            alert('Por favor, preencha o campo do NIF');
                            erronif();
                            return false;
                        }
                        else if(document.getElementById("ntelemovel").value.length < 9){
                            alert('Por favor, preencha o campo do Nº de Telemovél');
                            errontelemovel();
                            return false;
                        }
                        else if(document.getElementById("pais").value.length < 3){
                            alert('Por favor, preencha o campo do País');
                            erropais();
                            return false;
                        }
                    }
                    
                    function erronome() {
                        document.getElementById("nomecompleto").focus();
                        document.getElementById("nomecompleto").style.backgroundColor = "#ff8582";
                        setInterval(errornome, 2000);
                    }
                    function errornome() {
                        document.getElementById("nomecompleto").style.backgroundColor = "#f4ffe0";
                    }
                    function erroemail() {
                        document.getElementById("email").focus();
                        document.getElementById("email").style.backgroundColor = "#ff8582";
                        setInterval(erroremail, 2000);
                    }
                    function erroremail() {
                        document.getElementById("email").style.backgroundColor = "#f4ffe0";
                    }
                    function erronif() {
                        document.getElementById("nif").focus();
                        document.getElementById("nif").style.backgroundColor = "#ff8582";
                        setInterval(errornif, 2000);
                    }
                    function errornif() {
                        document.getElementById("nif").style.backgroundColor = "#f4ffe0";
                    }
                    function errontelemovel() {
                        document.getElementById("ntelemovel").focus();
                        document.getElementById("ntelemovel").style.backgroundColor = "#ff8582";
                        setInterval(errorntelemovel, 2000);
                    }
                    function errorntelemovel() {
                        document.getElementById("ntelemovel").style.backgroundColor = "#f4ffe0";
                    }
                    function erropais() {
                        document.getElementById("pais").focus();
                        document.getElementById("pais").style.backgroundColor = "#ff8582";
                        setInterval(errorpais, 2000);
                    }
                    function errorpais() {
                        document.getElementById("pais").style.backgroundColor = "#f4ffe0";
                    }
                </script>
                <div class="espacamento-2"></div>
            </div>
        </div>
        
        <?php
            include 'Rodape.php';
        ?>
    </body>
</html>

