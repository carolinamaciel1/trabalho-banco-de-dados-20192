<html>
<head>
  <title>Estoque</title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <br>
	<h1><p align="center">Controle de fornecedores</p></h1>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <div class="container-fluid">
        <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm">
                <form method="POST" action="consultar_fornecedor.php">
                  <input type="text" class="form-control" id="" placeholder="Pesquisar"  name="pesquisar">
                </div>
                <div class="col-sm">
                  <button type="submit" class="btn btn-primary col-sm-6" name="btn" value="btn_buscar">Buscar</button>
                </div>
              </form>
        </div>
  </div>
</div>

  <!--<table p align="center" border="1" cellpadding="5">
    <tr>
    <td><a href="index.php">Voltar</a></td>
    <td><a href="sair.php">Sair</a></td>
    </tr>
  </table>-->
</body>
</html><br>

<?php 
  
  include('conexao.php');

  @$btn_buscar=$_POST['btn_buscar'];
  @$pesquisar=$_POST['pesquisar'];

  if(empty($pesquisar)){
      $sql = "SELECT * FROM fornecedor ORDER BY nome ASC";
      $qr = mysqli_query($link, $sql) or die(mysqli_error());
      echo "<table align='center' border='1' cellpadding='8'><tr>";
      echo "<tr><th>Produto</th><th>CNPJ</th><th>Endereço</th><th>Telefone</th><th>Editar</th><th>Excluir</th></tr></tr>";
            while($consulta = mysqli_fetch_assoc($qr)){
                echo "<tr><td>".@$consulta['nome']."</td>";
                echo "<td>".number_format(@$consulta['cnpj'], 2, ',', '.')."</td>";
                echo "<td>".@$consulta['endereco']."</td>";
                echo "<td>".@$consulta['telefone']."</td>";
                 echo "<td><a href='editar_fornecedor.php?id_fornecedor=".@$consulta['id_fornecedor']."'>Editar</a></td>";
                echo "<td><a href='excluir_fornecedor.php?id_fornecedor=".@$consulta['id_fornecedor']."'>Excluir</a></td>";

      }
    }else{
    $sql = "SELECT * FROM fornecedor WHERE nome LIKE '%$pesquisar%'";
    $query = mysqli_query($link,$sql);
    echo "<table align='center' border='1' cellpadding='8'><tr>";
    echo "<tr><th>Produto</th><th>Preço</th><th>Quantidade em estoque</th><th>Editar</th><th>Excluir</th></tr></tr>";
      while($row=mysqli_fetch_array($query)){
        echo"<tr><td>". $consulta['nome']."</td>";
        echo "<td>".number_format(@$consulta['valor'], 2, ',', '.')."</td>";
        echo "<td>".@$consulta['qtd']."</td>";
         echo "<td><a href='editar_fornecedor.php?id_fornecedor=".@$consulta['id_fornecedor']."'>Editar</a></td>";
                echo "<td><a href='excluir_fornecedor.php?id_fornecedor=".@$consulta['id_fornecedor']."'>Excluir</a></td>";
    }
  }
?>
