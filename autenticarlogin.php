<?php 
session_start();
 ?>
<html>
 <head>
 <script type="text/javascript"></script>

 	<title>Autenticação do usuário</title>
 </head>
 <body>

<?php 
include ('conexao.php');

@$login =$_POST['login'];
@$senha =$_POST['senha'];

$sql = mysqli_query($link,"SELECT * FROM  usuarios WHERE login = '$login' AND senha='$senha'")or die(mysqli_error($link));
//conta a quantidade de linhas, para verificar registro
$row = mysqli_num_rows($sql);
	if ($row > 0) {

		@$_SESSION['login']=$_POST['login'];
		@$_SESSION['senha_cliente']=$_POST['senha_cliente'];

		echo "<center>Você foi altenticado com sucesso!</center><script>window.location='index.php',10000</script>";
	
	}else{
		//echo "<center>Nome de usuario ou senhas invalidos, aguarde um instate para tentar novamente!</center><script>login.location='login.php',10000</script>";
		echo "<script>alert('Login ou senha inválidos.'); window.location='login.php';</script>";
		
			}
  ?>
 </body>
 </html>
 