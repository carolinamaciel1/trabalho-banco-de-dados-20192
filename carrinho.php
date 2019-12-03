<?php
//dentro da sessao
    session_start(); 
    if(!isset($_SESSION['carrinho'])){ 
        $_SESSION['carrinho'] = array(); 
    } //adiciona produto 
     
    if(isset($_GET['acao'])){ 
        //ADICIONAR CARRINHO 
        if($_GET['acao'] == 'add'){ 
            $id = intval($_GET['id_produto']); 
            if(!isset($_SESSION['carrinho'][$id])){ 
                $_SESSION['carrinho'][$id] = 1;
                header('location:carrinho.php');
            } else { 
                $_SESSION['carrinho'][$id] += 1; 
                header('location:carrinho.php');
            } 
        } //REMOVER CARRINHO 
     
        if($_GET['acao'] == 'del'){ 
            $id = intval($_GET['id']); 
            if(isset($_SESSION['carrinho'][$id])){ 
                unset($_SESSION['carrinho'][$id]); 
            } 
        } //ALTERAR QUANTIDADE 
        if($_GET['acao'] == 'up'){ 
            if(is_array(@$_POST['prod'])){ 
                foreach($_POST['prod'] as $id => $qtd){
                        $id  = intval($id);
                        $qtd = intval($qtd);
                        if(!empty($qtd) || $qtd <> 0){
                            $_SESSION['carrinho'][$id] = $qtd;
                        }else{
                            unset($_SESSION['carrinho'][$id]);
                        }
                }
            }
        }
           
   }
           
           
    ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Carrinho de Compras</title>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table border="1" cellpadding="15">
<h3><caption>Carrinho de Compras</caption></h3>
<thead>
    <tr>
    <th width="244">Produto</th>
    <th width="79">Quantidade</th>
    <th width="89">Produto</th>
    <th width="100">SubTotal</th>
    <th width="64">Remover</th>
    </tr>
</thead>
<!--acao up acao de compar do estoque-->
<form action="?acao=up" method="post">
    <tfoot>
        <tr>
            <td colspan="5"><p align="center"><input type="submit" value="Atualizar Carrinho" /></p></td>
        <tr>
            <td colspan="5"><a href="estoque.php"><p align="center">Adicionar mais um produto</p></a></td>
        <tr>
            <td colspan="5"><a href="cadastro.php"><p align="center"><input type="submit" value="Finalizar a compra" /></p></td>
    </tfoot>
    <tbody>
<?php
    // verificar se o estoque do carinho ta zero
    if(count($_SESSION['carrinho']) == 0){
        echo '<tr>
            <td colspan="5">Não há produto no carrinho</td>
            </tr>';
    } else {
require("conexao.php");
        $total = 0;
        //mostrando o produto que o cliente colocou no carrinho
foreach($_SESSION['carrinho'] as $id => $qtd){
    $sql   = "SELECT *  FROM estoque WHERE id_estoque= '$id'";
    $qr    = mysqli_query($link,$sql) or die(mysqli_error());
    $ln    = mysqli_fetch_assoc($qr);
    $nome  = $ln['nome'];
    $preco = number_format($ln['preco'], 2, ',', '.');
    $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
    $total += $ln['preco'] * $qtd;
        echo '<tr>       
        <td>'.$nome.'</td>
        <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
        <td>R$ '.$preco.'</td>
        <td>R$ '.$sub.'</td>
        <td><a href="?acao=del&id_produto='.$id.'">Remove</a></td>
        </tr>';
}
$total = number_format($total, 2, ',', '.');
    echo'<tr>                         
        <td colspan="4">Total</td>
        <td>R$ '.$total.'</td>
        </tr>';
}
// atualizando o carrinho caso o cliente queira remover um produto
$sql = mysqli_query($link,"UPDATE estoque SET qtd WHERE id_estoque")or die(mysqli_error());
$ln    = mysqli_fetch_assoc($qr);
if($ln) {
    echo "Atualização realizada com sucesso!";
}else{
    echo "Erro na atualização".mysqli_error();
}

 ?>
         </tbody>
    </form>
 </table>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>