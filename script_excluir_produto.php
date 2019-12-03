
<?php
	session_start();
  	include_once('conexao.php');
  	$id_produto=$_POST['id_produto'];
  	$nome = $_POST['nome'];
  	$valor = $_POST['valor'];
  	$marca = $_POST['marca'];
	$sql = "DELETE FROM produto WHERE id_produto='$id_produto'";
    $qr = mysqli_query($link, $sql) or die(mysqli_error());
	$consulta = mysqli_fetch_assoc($qr);
	echo " Produto Excluido!  <script>window.location='consultar_fornecedor.php'</script>";

	
	
?>

