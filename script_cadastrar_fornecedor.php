<?php
include('conexao.php');
@$btn = $_POST['enviar'];
@$nome = $_POST["nome"];
@$cnpj = $_POST["cnpj"];
@$telefone = $_POST["telefone"];
@$endereco = $_POST["endereco"];

#$quantidade = $_POST["quantidade"];

if(empty($nome) || empty($cnpj) || empty($telefone) || empty($endereco)){
	echo "<script>alert('Preencha os campos.'); window.location='cadastrar_produto.php';</script>";
}else{
	//se estiver preenchidos os dados, o produto é cadastrado no banco de dados
		@$query = mysqli_query($link,"INSERT INTO fornecedor(nome,cnpj,telefone,endereco) VALUES ('$nome','$cnpj','$telefone','$endereco')") or die(mysqli_error($link));	
		echo " Fornecedor Cadastrado!  <script>window.location='consultar_fornecedor.php'</script>";

	}
?>