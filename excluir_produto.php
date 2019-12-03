<html>
<head>
<script type="text/javascript"></script>
	<link rel="stylesheet" href="style.css">
	<title>Excluir Produtos</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
</head>


<?php
	session_start();
  	include_once('conexao.php');
  	@$id_produto = filter_input(INPUT_GET, 'id_produto', FILTER_SANITIZE_NUMBER_INT	);
	@$sql = "SELECT * FROM produto WHERE id_produto='$id_produto'";
    $qr = mysqli_query($link, $sql) or die(mysqli_error());
	$consulta = mysqli_fetch_assoc($qr);
	
?>


<body>
<!--Menu-->	

	<h1><p align="center">Produtos</p></h1>

	<div class="container-fluid">
			<!--Castro do usuario-->
		<form method="post" action="script_excluir_produto.php">
			<div class="form-group">
			    <input type="hidden" class="form-control" name="id_produto" value="<?php echo @$consulta['id_produto']; ?>">
			  </div>
			  <div class="form-group">
			  	<h4 class="title-cadastro">Excluir Produto</h4>
			  	<br>
				<label for="exampleInputPassword1">Nome</label>
			    <input type="text" class="form-control"  name="nome" value="<?php echo @$consulta['nome'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Valor</label>
			    <input type="text" class="form-control"   name="valor" value="<?php echo @$consulta['valor'] ?>">
			  </div>
			  
			 <div class="form-group">
			    <label for="exampleInputPassword1">Marca</label>
			    <input type="text" class="form-control"  name="marca" value="<?php echo @$consulta['marca'] ?>">
			  </div> 

			  <div class="form-group">
			    <label for="exampleInputPassword1">Quantidade (unidades)</label>
			    <input type="password" class="form-control" name="senha" value="<?php echo @$consulta['quantidade'] ?>">
			  </div>

			  <br>

		  		<button type="submit" class="btn btn-success" text-align="center" name="btn" value="enviar">Excluir</button>
		  		<table p align="center" border="1" cellpadding="5">
			<button type="submit" class="btn btn-secondary btn-md" id="btn-voltar"><a href="index.php">Voltar</a></button>
		  		<!--Depois do cadstro do usuário ele direcionar pra cadastrar o login desse usuario-->
			</form>

			
</table>
		</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
