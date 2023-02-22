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
        include 'conexao.php'; //chamei a tabela da coneção
        $consulta = $cn->query('select * from tbl_comidas'); //consulta
        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ //array 

        echo $exibe['nm_comida'] . '<br>'; //echo com nome da cmomida
        echo $exibe['vl_preco']; //echo com preço
            echo '<hr>';
        }
    ?>
</body>
</html>