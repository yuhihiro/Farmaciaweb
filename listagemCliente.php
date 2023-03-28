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
                        <td><a class="bx bx-edit-alt box-icon" style="text-decoration: none;" href="atualizarCliente.php?id=<?php echo $idClinte ?>" role="button" onclick="openModal()" id="new"></a>
                            <a class="bx bxs-trash box-icon" href="deletarCliente.php?id=<?php echo $idClinte?>" role="button" id="new"></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="modal-container">
            <div class="modal">
                <form>
                    <label for="m-nome">Nome Cliente</label>
                    <input id="m-nome" nome="nomeCliente" type="text" required />

                    <label for="m-nome">CPF</label>
                    <input id="m-função" nome="cpfCliente" type="number" required />

                    <label for="m-nome">CEP</label>
                    <input id="m-função" nome="cepCliente" type="number" required />

                    <label for="m-nome">Endereço</label>
                    <input id="m-função" nome="enderecoCliente" type="text" required />

                    <label for="m-nome">Telefone</label>
                    <input id="m-função" nome="telefoneCliente" type="number" required />

                    <button>Editar</button>

                </form>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>