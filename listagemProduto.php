<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listagemProduto.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Listagem Produto</title>

</head>

<body>
    <div class="container">
        <div class= "header">
            <span>Cadastro Produto</span>
        </div>

        <div class="divTable">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Cod</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Marca Porduto</th>
                        <th scope="col">Valor Produto</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM `produto`";
                $buscar = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)) {

                    $idProduto = $array['idProduto'];
                    $nomeProduto  = $array['nomeProduto'];
                    $marcaProduto    = $array['marcaProduto'];
                    $valorProduto    = $array['valorProduto'];
                    $quantidadeProduto     = $array['quantidadeProduto'];
                ?>
                    <tr>
                        <td><?php echo $idProduto ?></td>
                        <td><?php echo $nomeProduto ?></td>
                        <td><?php echo $marcaProduto ?></td>
                        <td><?php echo $valorProduto ?></td>
                        <td><?php echo $quantidadeProduto ?></td>
                        <td><a class="bx bx-edit-alt box-icon" role="button" href="editarProduto.php?id=<?php echo $idProduto ?>" style="text-decoration: none;" id="new"></a>
                            <a class="bx bxs-trash box-icon" href="deletarProduto.php?id=<?php echo $idProduto ?>" role="button" id="new"></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <script src="js/script.js"></script>
</body>

</html>