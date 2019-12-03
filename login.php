<html>
<head>
<script type="text/javascript"></script>
	<title>Login do usuário</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br>
<br>
<br>
<h1 align="center">SISTOQUE</h1>
<h5><p align="center">Sistema de controle de estoque</p></h5>
<br>

<table align="center">
	<tr>
		<td>
			<form name="login" method="POST" action="autenticarlogin.php">
			  <div class="form-group">
			    <!--<label for="exampleInputEmail1">Login</label>-->
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login" name="login">
			  </div>
			  <div class="form-group">
			    <!--<label for="exampleInputPassword1">Senha</label>-->
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="*********" name="senha">
			  </div>
			  <br>
		  		<button type="submit" class="btn btn-sm btn-success" text-align="center" name="Entrar" id="btn-logar">Entrar</button>
			</form>
			<!--<div>Ainda não é cadastrado(a)? <a href="cadastro.php"> Clique aqui para se cadastrar! </a></div>-->
		</td>
	</tr>
</table>


	<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</form>

<p align="center" id="powered">Powered by Serra Desenvolvimentos</p>
</body>
</html>
