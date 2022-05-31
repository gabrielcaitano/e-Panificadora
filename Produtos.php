<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Panificadora Rainha</title>
    <link rel="stylesheet" href="./frameworks/w3.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include ("conexao.php"); ?>
</head>


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
    <div class="w3-content" style="max-width:1000px" id="produtos-1">
        <div class="w3-text-white w3-center w3-padding-32 w3-jumbo">Cardápio</div>

        <div class="w3-row w3-center w3-border w3-border-dark-grey">
            <a href="javascript:void(0)" onclick="abrirCategoria(event, 'Salgados');" id="ID-Produtos">
                <div class="w3-col s4 Evento w3-padding-large w3-hover-amber">Salgados</div>
            </a>
            <a href="javascript:void(0)" onclick="abrirCategoria(event, 'Doces');">
                <div class="w3-col s4 Evento w3-padding-large w3-hover-amber">Doces</div>
            </a>
            <a href="javascript:void(0)" onclick="abrirCategoria(event, 'Bebidas');">
                <div class="w3-col s4 Evento w3-padding-large w3-hover-amber">Bebidas</div>
            </a>
        </div>
        <!--Tirar Os H5, RESOLVER TAMANHOS-->
        <div id="Salgados" class="w3-container produtos-1 w3-padding-32 w3-white">
            <div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Pao.jpg" alt="Pão Branco" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                $cod_prod = 1;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div> 
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$".number_format($valor, 2, '.', ',')."/un."?></span>
                            </h5>
                            <!--RESOLVER TAMANHO IMAGENS CATEGORIA SALGADOS-->
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>

                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Baguete.jpg" alt="Baguete" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 2;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$".number_format($valor, 2, '.', ',')."/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>

                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/HamburguerArtesanal.jpg" alt="Hambúrguer" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 3;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$".number_format($valor, 2, '.', ',')."/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>

                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/BatataFrita.jpg" alt="Batata Frita" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 4;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/PizzaCalabresa.jpg" alt="Pizza Calabresa" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 5;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$".number_format($valor, 2, '.', ',')."/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Paodeforma.jpg.jpg" alt="Pão De Forma" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 6;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Croissant.jpg" alt="Croissant" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 7;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Nachos.jpg" alt="Nachos" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 8;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/PaoDeBanana.jpg" alt="Pão De Banana" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 9;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-h w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div id="Doces" class="w3-container produtos-1 w3-padding-32 w3-white">
            <div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/CookiesProdutos.jpg" alt="Cookies" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 10;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span></h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/brownie.jpg" alt="Brownie" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 11;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Cupcake.jpg" alt="Cupcake" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 12;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Pudim.jpg" alt="Pudim" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 13;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Bolo.jpg" alt="Bolo" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 14;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Cheesecake.jpg" alt="Cheesecake" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 15;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Waffles.jpg" alt="Waffles" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 16;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Sorvete.jpg" alt="Sorvete" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 17;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Macaroons.jpg" alt="Macaroons" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 18;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="Bebidas" class="w3-container produtos-1 w3-padding-32 w3-white">
            <div class="w3-row-padding w3-margin-top">

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Cafe.jpg" alt="Café" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 19;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/SucoLaranja.jpg" alt="Suco De Laranja" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 20;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/SucoLimao.jpg" alt="Suco De Limão" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 21;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/SucoKiwi.jpg" alt="Suco De Kiwi" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 22;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/Refrigerante.jpg" alt="Refrigerante" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 23;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/SucoDeFramboesa.jpg" alt="Suco De Framboesa" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 24;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/ChaDeHortela.jpg" alt="Chá De Hortelã" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 25;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/CafePreto.jpg" alt="Café Preto" class="imagem">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 26;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card w3-margin">
                        <div class="w3container">
                            <img src="imagens/MilkShake.jpg" alt="MilkShake" style="width:100%">
                            <div class="overlay">
                                <div class="descricao"> <?php
                                 $cod_prod = 27;
                                 $sql = "SELECT nome_prod,valor_prod,descricao from produto where cod_prod = '{$cod_prod}'";
                                 $resultado = $conexao->query($sql);
                                 $row = $resultado->fetch_assoc();
                                 $nome = $row["nome_prod"];
                                 $valor = $row["valor_prod"];
                                 $descricao = $row["descricao"];
                                 echo "$descricao"; ?> </div>
                            </div>
                        </div>
                        <div class="w3-container w3-padding">
                            <h5 style="font-size: 15px;"><?php echo "$nome" ; ?>
                                <span class="w3-right w3-tag w3-round"><?php echo "R$$valor/un."?></span>
                            </h5>
                            <div><button class="w3-center w3-button w3-gray w3-hover-blue w3-round-large"
                                    style="width:100%">Comprar</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Fim Conteudo-->
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

</html>