<?php
// iniciando a sessão, pois precisamos pegar o cd do usuario logado para salvar na tabela de vendas no campo cd_cliiente
session_start();  

include 'conexao.php';


$data = date('Y-m-d');  // variavel que vai pegar a data do dia (ano mes dia -padrão do mysql)
$ticket = uniqid();  // gerando um ticket com função uniqid(); 	gera um id unico    
$cd_user = $_SESSION['id'];   //recebendo o codigo do usuário logado, nesta pagina o usuario ja esta logado pois, em do carrinho de compra

//// criando um loop para sessão carrinho q recebe o $cd e a quantidade
foreach ($_SESSION['carrinho'] as $cd => $qnt)  {
    $consulta = $cn->query("SELECT vl_preco FROM tbl_comidas WHERE cd_comida='$cd'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    $preco = $exibe['vl_preco'];
    
	
	$inserir = $cn->query("INSERT INTO tbl_venda(no_Ticket,cd_cliente,cd_comida,qt_comida,vl_item,dt_venda)  VALUES
	('$ticket','$cd_user','$cd','$qnt','$preco','$data')");
	
}

include 'fim.php';


?>
