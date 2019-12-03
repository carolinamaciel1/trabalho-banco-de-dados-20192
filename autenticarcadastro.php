<?php
include('conexao.php');
@$btn = $_POST['enviar'];
if ($btn) {
		
	#dados pessoais
	@$nome = $_POST["nome"];
	@$cpf = $_POST["cpf"];
	@$telefone = $_POST["telefone"];
	@$email = $_POST["login"];
	@$senha = $_POST["senha"];

	#endereço
	@$endereco = $_POST["endereco"];

	#verifa se está vazio
	if(empty($nome) || empty($cpf) || empty($telefone) || empty($login)|| empty($senha) || empty($endereco)){
			//se tiver vazios os campos ele ele mostrarar a msg é vai direcionar pra mesma pagina
		echo "<script>alert('Preencha os campos.'); window.location='cadastro.php';</script>";
	}else{
	//se estiver preenchidos os dados, o cliente é direcionado para o cadastro do seu login!
		echo " cliente cadastrado  <script>window.location='cadastrouser.php'</script>";
		}
	//Enviando os dados para o banco 
	@$query = mysql_query($link,"INSERT INTO cliente VALUES (null,'$nome','$cpf','$telefone','$login','$senha','$endereço')") or die(mysqli_error($link));

		
}
?>