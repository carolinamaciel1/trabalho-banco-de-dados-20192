
<?php
	session_start();
  	include_once('conexao.php');
  	$id_fornecedor=$_POST['id_fornecedor'];
  	$nome = $_POST['nome'];
  	$cnpj = $_POST['cnpj'];
  	$endereco = $_POST['endereco'];
  	$telefone = $_POST['telefone'];
  	
  	$id_fornecedor = filter_input(INPUT_POST, 'id_fornecedor', FILTER_SANITIZE_STRING);
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$cnpj = filter_input(INPUT_POST,'valor',FILTER_SANITIZE_NUMBER_INT);	
	$endereco = filter_input(INPUT_POST,'marca',FILTER_SANITIZE_STRING);
	$telefone = filter_input(INPUT_POST,'marca',FILTER_SANITIZE_NUMBER_INT);

	$sql = "DELETE FROM Fornecedor WHERE id_fornecedor='$id_fornecedor'";
    $qr = mysqli_query($link, $sql) or die(mysqli_error());
	$consulta = mysqli_fetch_assoc($qr);
	echo " Fornecedor Excluido!  <script>window.location='consultar_fornecedor.php'</script>";

	
	
?>

