<html>
<head>
<script type="text/javascript"></script>
	<link rel="stylesheet" href="style.css">
	<title>Cadastro do Cliente</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
</head>
<body>
<!--Menu-->
	<h1><p align="center">Cadastre-se</p></h1>

	<div class="container-fluid">
			<!--Castro do usuario-->
			<form method="post" action="script_cadastrar_fornecedor.php">
			  <div class="form-group">
			  	<h4 class="title-cadastro">Dados do Fornecedor</h4>
			  	<br>
			    <label for="exampleInputEmail1">Nome</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome" name="nome">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">CNPJ</label>
			    <input type="text" class="form-control" id="exampleInputcpf" placeholder="00.000.000/0000-00" name="cnpj">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Telefone</label>
			    <input type="text" class="form-control" id="exampleInputRua" aria-describedby="rua" placeholder="(00)00000-0000" name="telefone">
			  </div>

			  <h4 class="title-cadastro">Endereço</h4>
			  <br>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Endereço Completo</label>
			    <input type="text" class="form-control" id="exampleInputRua" aria-describedby="rua" placeholder="ex: Rua das flores, 3154, Fortaleza - Brazil" name="endereco">
			  </div>

		  		<button type="submit" class="btn btn-success" text-align="center" name="btn" value="enviar">Cadastrar</button>
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


