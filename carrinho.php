<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    session_start();

    include 'conexao.php';

    if (!empty($_GET['cd'])) {

        $cd_prod=$_GET['cd'];
    
    if (!isset($_SESSION['carrinho'])) {

        $_SESSION['carrinho'] = array();
    }


    if (!isset($_SESSION['carrinho'][$cd_prod])) {
        $_SESSION['carrinho'] [$cd_prod]=1;
    }
    else {
        $_SESSION['carrinho'] [$cd_prod]+=1;
    }
        include 'mostraCarrinho.php';

    } else {
        include 'mostraCarrinho.php';
    }
    ?>

    <div>
        <h1>Total R$ <?php echo number_format($total,2,',','.'); ?></h1>
    </div>

    <div>
        <a href="index.php"><button>Continuar comprando</button></a>
        <a href="finalizarCompra.php"><button>Finalizar Compra</button></a>
    </div>

</div>
</body>
</html>