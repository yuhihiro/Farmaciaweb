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
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {

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
                        <td><a class="bx bx-edit-alt box-icon" role="button" style="text-decoration: none;" onclick="openModal()" id="new"></a>
                            <a class="bx bxs-trash box-icon" href="deletarProduto.php?id=<?php echo $idProduto ?>" role="button" id="new"></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="modal-container">
            <div class="modal" src="editarProduto.php?id=<?php echo $idProduto ?>>
                <form>
                    <label for="m-nome">Nome Produto</label>
                    <input id="m-nome" nome="nomeProduto" type="text" value = "<?php  echo  $nomeProduto  ?>​​"  required />

                    <label for="m-nome">Marca Produto</label>
                    <input id="m-função" nome="marcaProduto" type="text" value = "<?php  echo  $marcaProduto  ?>​​" required />

                    <label for="m-nome">Valor</label>
                    <input id="m-função" nome="valorProduto" type="number" value = "<?php  echo  $valorProduto  ?>​​" required />

                    <label for="m-nome">Quantidade</label>
                    <input id="m-função" nome="quantidadeProduto" type="number" value = "<?php  echo  $quantidadeProduto  ?>​​" required />

                    <button type="submit">Editar</button>

                </form>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>