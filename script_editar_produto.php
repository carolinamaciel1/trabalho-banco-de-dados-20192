
<?php
	session_start();
  	include_once('conexao.php');
  	$id_produto=$_POST['id_produto'];
  	$nome = $_POST['nome'];
  	$valor = $_POST['valor'];
  	$marca = $_POST['marca'];

	$id_produto = filter_input(INPUT_POST, 'id_produto', FILTER_SANITIZE_STRING);
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$valor = filter_input(INPUT_POST,'valor',FILTER_SANITIZE_NUMBER_FLOAT);	
	$marca = filter_input(INPUT_POST,'marca',FILTER_SANITIZE_STRING);
	$sql = "UPDATE produto SET nome='$nome', valor='$valor',
	marca='$marca' WHERE id_produto='$id_produto'";
    $qr = mysqli_query($link, $sql) or die(mysqli_error());
	$consulta = mysqli_fetch_assoc($qr);
	echo " Produto Alterado!  <script>window.location='index.php'</script>";

	
	
?>

