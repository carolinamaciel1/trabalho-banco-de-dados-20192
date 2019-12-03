
<?php
include('conexao.php');
@$btn = $_POST['enviar'];

if ($btn) {


@$cadas_login = $_POST["login"];
@$cadas_senha = $_POST["senha"];

//cadastrando o login do usuario 

@$query = mysqli_query($link,"INSERT INTO usuarios VALUES (null,'$login','$senha')") or die(mysqli_error($link));

	if(empty($nome) || empty($cpf)){
		echo "<script>alert('Preencha os campos.'); window.location='cadastro.php';</script>";
	}else{
		echo "cliente cadastrado<script>window.location='index.php'</script>";
}

?>