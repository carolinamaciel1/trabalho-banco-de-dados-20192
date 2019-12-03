<?php
include('conexao.php');
@$btn = $_POST['enviar'];
@$nome = $_POST["nome"];
@$valor = $_POST["valor"];
@$marca = $_POST["marca"];
#$quantidade = $_POST["quantidade"];

if(empty($nome) || empty($valor) || empty($marca)){
	echo "<script>alert('Preencha os campos.'); window.location='cadastrar_produto.php';</script>";
}else{
	//se estiver preenchidos os dados, o produto é cadastrado no banco de dados
		@$query = mysqli_query($link,"INSERT INTO produto(nome,valor,marca) VALUES ('$nome','$valor','$marca')") or die(mysqli_error($link));	
		echo " Produto Cadastrado!  <script>window.location='index.php'</script>";

	}
?>