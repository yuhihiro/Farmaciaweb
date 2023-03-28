<?php

include 'conexao.php';

$nomeCliente               = $_POST['nomeCliente'];
$cpfCliente                = $_POST['cpfCliente'];
$cepCliente                = $_POST['cepCliente'];
$ederecoCliente            = $_POST['ederecoCliente'];
$telefoneCliente           = $_POST['telefoneCliente'];



$sql = "INSERT INTO `cliente`(`nomeCliente`, `cpfCliente`, `cepCliente`, `ederecoCliente`, `telefoneCliente`)  VALUES ($nomeCliente,'$cpfCliente','$cepCliente','$ederecoCliente', '$telefoneCliente')";

$inserir = mysqli_query($conexao, $sql);

?>

<div class="container" style="width:300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <h4>Cliente Cadastrado com Sucesso!</h4>

    <div>
        <a href="index.html" role="button" class="btn btn-sm btn-secondary">Cadastrar novo Ítem</a>
    </div>
</div>