<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listagemCliente.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Listagem Cliente</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <span>Cadastro Produto</span>
        </div>
        <div class="divTable">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Cod</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cpf</th>
                        <th scope="col">Cep</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM `cliente`";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $idClinte               = $array['idCliente'];
                    $nomeCliente            = $array['nomeCliente'];
                    $cpfCliente             = $array['cpfCliente'];
                    $cepCliente             = $array['cepCliente'];
                    $ederecoClinte          = $array['ederecoCliente'];
                    $telefoneCliente        = $array['telefoneCliente'];
                ?>
                    <tr>
                        <td><?php echo $idClinte ?></td>
                        <td><?php echo $nomeCliente ?></td>
                        <td><?php echo $cepCliente ?></td>
                        <td><?php echo $cpfCliente ?></td>
                        <td><?php echo $ederecoClinte ?></td>
                        <td><?php echo $telefoneCliente ?></td>
                        <td><a class="bx bx-edit-alt box-icon" style="text-decoration: none;" role="button" onclick="openModal()" id="new"></a>
                            <a class="bx bxs-trash box-icon" href="deletarCliente.php?id=<?php echo $idClinte ?>" role="button" id="new"></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="modal-container">
            <div class="modal">
                <form action="editarCliente.php?id<?php echo $idProduto ?>">
                <form action="atualizarCliente.php" method="POST">

                <?php
                $sql = "SELECT * FROM `produto` WHERE idProduto = $id";

                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $idClinte               = $array['idCliente'];
                    $nomeCliente            = $array['nomeCliente'];
                    $cpfCliente             = $array['cpfCliente'];
                    $cepCliente             = $array['cepCliente'];
                    $ederecoClinte          = $array['ederecoCliente'];
                    $telefoneCliente        = $array['telefoneCliente'];
                ?>


                    <label>Nome Cliente</label>
                    <input name="nomeCliente" type="text" value="<?php echo $nomeCliente ?>" required />

                    <label>CPF</label>
                    <input name="cpfCliente" type="number" value="<?php echo $cpfCliente ?>" required />

                    <label>CEP</label>
                    <input name="cepCliente" type="number" value="<?php echo $cepCliente ?>" required />

                    <label>Endereço</label>
                    <input name="enderecoCliente" type="text" value="<?php echo $ederecoClinte ?>" required />

                    <label>Telefone</label>
                    <input name="telefoneCliente" type="number" value="<?php echo $telefoneCliente ?>" required />

                    <button>Editar</button>
                </form>
                </form>
            </div>
        </div>
        
        <?php } ?>
    </div>
    <script src="js/script.js"></script>
</body>

</html>