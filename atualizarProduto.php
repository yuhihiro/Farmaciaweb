<?php

include 'conexao.php';
$id = $_POST ['id'];

$nomeProduto            = $_POST['nomeProduto'];
$marcaProduto           = $_POST['marcaProduto'];
$valorProduto           = $_POST['valorProduto'];
$quantidadeProduto      = $_POST['quantidadeProduto'];

$sql = "UPDATE `produto` SET `nomeProduto`= '$nomeProduto', `marcaProduto` = '$marcaProduto', `valorProduto` = $valorProduto, `quantidadeProduto` = $quantidadeProduto WHERE idProduto = id";

$atualizar = mysqli_query($conexao,$sql);

?>

<div class="container" style="width:300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <h4>Produto Cadastrado com Sucesso!</h4>

    <div>
        <a href="listagemProduto.php" role="button" class="btn btn-sm btn-secondary">Cadastrar novo Ítem</a>
    </div>
</div>