<html>
<head>
	<title>Index</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<?php 
  
  session_start();
  include('conexao.php');
  @$id_produto = filter_input(INPUT_GET, id_produto, FILTER_SANITIZE_NUMBER_INT	);

  @$btn_buscar=$_POST['btn_buscar'];
  @$pesquisar=$_POST['pesquisar'];

  if(empty($pesquisar)){
      $sql = "SELECT * FROM produto ORDER BY nome ASC";
      $qr = mysqli_query($link, $sql) or die(mysqli_error());
      echo "<table align='center' border='1' cellpadding='8'><tr>";
      echo "<tr><th>Produto</th><th>Preço</th><th>Quantidade em estoque</th><th>Editar</th><th>Excluir</th></tr>";
            while($consulta = mysqli_fetch_assoc($qr)){
                echo "<tr><td>".@$consulta['nome']."</td>";
                echo "<td>".number_format(@$consulta['valor'], 2, ',', '.')."</td>";
                echo "<td>".@$consulta['qtd']."</td>";
				        echo "<td><a href='editar_produto.php?id_produto=".@$consulta['id_produto']."'>Editar</a></td>";
                echo "<td><a href='excluir_produto.php?id_produto=".@$consulta['id_produto']."'>Excluir</a></td>";
      }
    }else{
    $sql = "SELECT * FROM produto WHERE nome LIKE '%$pesquisar%'";
    $query = mysqli_query($link,$sql);
    echo "<table align='center' border='1' cellpadding='8'cellspacing='0'><tr>";
    echo "<tr><th>Produto</th><th>Preço</th><th>Quantidade em estoque</th><th>Editar</th><th>Excluir</th></tr>";
      while($row=mysqli_fetch_array($query)){
        echo"<tr><td>". $row['nome']."</td>";
        echo "<td>".number_format(@$consulta['valor'], 2, ',', '.')."</td>";
        echo "<td>".@$consulta['qtd']."</td>";
    		echo "<td><a href='editar_produto.php?id_produto=".@$consulta['id_produto']."'>Editar</a></td>";
    		echo "<td><a href='excluir_produto.php'>Excluir</a></td>";
    }
  }
?>

<body>
	<nav class="navbar navbar-light bg-light navbar-expand-md">
	  <a class="navbar-brand" href="index.php">SISTOQUE</a>
	    <ul class="navbar-nav">
		   <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Produto
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="cadastrar_produto.php">Cadastrar Produto</a>
	          <a class="dropdown-item" href="consultar_produto.php">Consultar Produtos</a>
	        </div>
	    	</li>


	    	<li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Fornecedor
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="cadastrar_fornecedor.php">Cadastrar Fornecedor</a>
	          <a class="dropdown-item" href="consultar_fornecedor.php">Consultar Fornecedor</a>
	        </div>
	    	</li>
	</ul>
</nav>
<div class="container-fluid">
        <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm" id="col2">
                <form method="POST" action="index.php">
                  <input type="text" class="form-control" id="" placeholder="Pesquisar"  name="pesquisar">
                </div>
                <div class="col-sm" id="col3">              

                  <button type="submit" class="btn btn-primary col-sm-6" name="btn" value="btn_buscar">Buscar</button>               

                </div>

              </form>
        </div>
  </div>
</div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


