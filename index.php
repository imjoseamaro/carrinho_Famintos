<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="estetica_imgs/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Home</title>
</head>
<body>
        
    <?php 
        include 'nav.php';
        include 'conexao.php';

        $consulta = $cn->query('select cd_comida, nm_comida, vl_preco from tbl_comidas;');
    ?> 

    <section class="slider">
        <input name='slide' type="radio" checked>
        <input name='slide' type="radio">
        <input name='slide' type="radio">
        <input name='slide' type="radio">
        <div class="slides">
            <div class="inicio">
                <div class="texto">
                    <div id="estetica">
                        <img id="logo2" src="estetica_imgs/famintosf2.png">
                        <p id="p">Se o problema é comida,<br> nós somos a solução!</p>
                    </div>
                </div>
                <img id="hbg" src="estetica_imgs/hbg3.jpg">
            </div>
            <div class="inicio">
                <div class="texto">
                    <div id="estetica">
                        <p id="p">Conheça nosso cardápio inteligente!</p>
                    </div>
                </div>
                <img id="hbg" src="estetica_imgs/hbg3.jpg">
            </div>
        </div>
    </section>

    <div class="recomendar">
        <div id="peqs">
            <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
            <div class='bloco'>
                <img class="quadro" src="comidas_imgs/<?php echo $exibe['nm_comida'];?>.jpg">
                <div><h3><?php echo $exibe['nm_comida']; ?></h1></div>
                <div><h5>R$ <?php echo number_format($exibe['vl_preco'],2,',','.'); ?></h4></div>

                    <a href="carrinho.php?cd=<?php echo $exibe['cd_comida'];?>">
                    <button class="btn" >
                        <span>Comprar</span>
                    </button>
                    </a>
                
            </div>
        <?php } ?> <!-- fechamento de chave da linha 52 -->

        </div> <!-- fechamento peqs-->
    </div> <!-- fechamento recomendar -->
</body>
</html>