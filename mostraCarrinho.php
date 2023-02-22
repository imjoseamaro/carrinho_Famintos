<div>
	
	<div>
		<h1>Carrinho de Compras</h1>
	</div>
	
	
	<?php
	
	$total = null; // variavel total que recebe valor nulo

    // criando um loop para sessão carrinho recebe o $cd e a quantidade
    foreach ($_SESSION['carrinho'] as $cd => $qnt)  {
    $consulta = $cn->query("SELECT * FROM tbl_comidas WHERE cd_comida='$cd'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $comida = $exibe['nm_comida'];  // variável que recebe o livro
    $preco = number_format(($exibe['vl_preco']),2,',','.'); // variável que recebe o preço
    $total += $exibe['vl_preco'] * $qnt; // variável que recebe preço * quantidade
	
	?>
	
	
	
	
	
	<div class="row" style="margin-top: 15px;">
		
		
		
		<div class="col-sm-1 col-sm-offset-1">
			<img src="comidas_imgs/<?php echo $exibe['nm_comida'];?>.jpg" style="width: 10%; display:flex">
		</div>
		
		
		<div class="col-sm-4">
			<h4 style="padding-top:20px"><?php echo $comida; ?></h4>
		</div>	
		
		
		<div class="col-sm-2">
			<h4 style="padding-top:20px">R$ <?php echo $preco; ?></h4>
		</div>		
		<div class="col-sm-2" style="padding-top:20px">
			<h4><?php echo $qnt; ?> </h4>
		</div>
		
		<div class="col-sm-1 col-xs-offset-right-1" style="padding-top:20px">
		
		<!--remove o item do carrinho pelo id -->
		<a href="removeCarrinho.php?cd=<?php echo $cd;?>">	 
		<span class="glyphicon glyphicon-remove">x</span>		
		</a>
		</div> 
				
	</div>	
	
	
	<?php } ?>