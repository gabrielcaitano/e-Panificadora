<!DOCTYPE html>
<html lang="pt-br">
<title>Panificadora Rainha</title>

<head>
    <link rel="stylesheet" href="./frameworks/w3.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body class="w3-black">

    <!-- Barra Lateral Para PC-->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" id="BarraLateralPC">

        <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>Início</p>
        </a>
        <a href="Produtos.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-shopping-basket w3-xxlarge"></i>
            <p>Produtos</p>
        </a>

        <a href="TCarrinho.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-shopping-cart w3-xxlarge"></i>
            <p>Carrinho</p>
        </a>

        <a href="Sobre.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-book w3-xxlarge"></i>
            <p>Sobre</p>
        </a>
        <a href="Contato.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>Contato</p>
        </a>
        <a onclick="document.getElementById('modal01').style.display='block'"
            class="w3-bar-item w3-button w3-padding-large w3-hover-white">
            <i class="fa fa-user-circle w3-xxlarge"></i>
            <p>Entrar</p>
        </a>
    </nav>
    <!--Para Lateral Para PC Encerrada-->

    <!--Barra Lateral Para Mobile-->
    <div class="w3-top w3-hide-large w3-hide-medium" id="BarraLateralMobile">
        <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">Início</a>
            <a href="Produtos.php" class="w3-bar-item w3-button" style="width:25% !important">Produtos</a>
            <a href="Sobre.php" class="w3-bar-item w3-button" style="width:25% !important">Sobre</a>
            <a href="Contato.php" class="w3-bar-item w3-button" style="width:25% !important">Contato</a>
        </div>
    </div>
    <!--Barra Lateral Mobile Encerrada-->

    <!--Conteudo-->
    <div class="w3-content" style="max-width:1000px">
        <div class="w3-padding-32 w3-content w3-text-grey">

            <h2 class="w3-text-white w3-center w3-jumbo w3-hide-small">Carrinho</h2>
            <h2 class="w3-text-white w3-center w3-xxlarge w3-hide-large">Carrinho</h2>
            <hr class="w3-opacity w3-center" style="width:100%">
            <table class="w3-table-all w3-text-black">
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
                <tr>
                    <td>Café Preto</td>
                    <td>R$2,30</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Sorvete</td>
                    <td>R$5,60</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Chá</td>
                    <td>R$4,75</td>
                    <td>4</td>
                </tr>

            </table>
            <br>
            <div class="w3-container w3-left w3-text-white w3-gray">
                <p class="w3-margin-right">Valor Total:</p>
            </div>
            <div class="w3-right w3-text-white w3-gray">
                <button class="w3-button" value="submit">Finalizar</button>
            </div>


        </div>

        <!--Fim Conteudo-->


    </div>
    <div id="modal01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-text-black w3-gray w3-animate-zoom" style="width: 25%;">

            <header class="w3-container w3-black w3-center">

                <span onclick="document.getElementById('modal01').style.display='none'"
                    class="w3-button w3-display-topright w3-hover-red w3-center w3-xlarge fa fa-times"></span>

                <h2>Entrar</h2>
            </header>

            <div class=" w3-container w3-section">
                <form action="login.php" method="POST">
                    <label><b>Usuário:</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Escreva Seu Usuário"
                        name="usuario" required>
                    <label><b>Senha:</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Escreve Sua Senha"
                        name="password" required>
                    <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Entrar</button>
                    <a href="./TCadastro.php" class="w3-right">Cadastrar</a>

                </form>
            </div>

            <footer class="w3-container w3-center w3-black">
                <a href="#" class="social fa fa-facebook w3-hover-opacity"></a>
                <a href="#" class="social fa fa-instagram w3-hover-opacity"></a>
                <a href="#" class="social fa fa-whatsapp w3-hover-opacity"></a>
            </footer>

        </div>
    </div>
    <script src="javascript.js"></script>
</body>
</head>

</html>