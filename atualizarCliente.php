<?php

include 'conexao.php';
$id = $_POST['id'];

$nomeCliente               = $_POST['nomeCliente'];
$cpfCliente                = $_POST['cpfCliente'];
$cepCliente                = $_POST['cepCliente'];
$ederecoCliente            = $_POST['ederecoCliente'];
$telefoneCliente           = $_POST['telefoneCliente'];

$sql = "UPDATE `cliente` SET `nomeCliente`= '$nomeCliente', `cpfCliente` = '$cpfCliente', `cepCliente` ='$cepCliente', `enderecoCliente` = '$enderecoCliente', `telefonecliente` = '$telefoneClinete' WHERE idCliente = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<div class="container" style="width:300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <h4>Atualizado com Sucesso!</h4>

    <div>
        <a href="listagemCliente.php" role="button" class="btn btn-sm btn-secondary">Atualizar novo Ítem</a>
    </div>
</div>s