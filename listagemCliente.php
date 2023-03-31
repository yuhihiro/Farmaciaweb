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
            <span>Listagem Cliente</span>
            <button id="new"><a href="formularioCliente.html" id="new">Incluir</a></button>
        </div>
        <div class="divTable">
            <table>
                <thead>
                    <tr>
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
                $buscar = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)) {

                    $idCliente               = $array['idCliente'];
                    $nomeCliente            = $array['nomeCliente'];
                    $cpfCliente             = $array['cpfCliente'];
                    $cepCliente             = $array['cepCliente'];
                    $ederecoClinte          = $array['ederecoCliente'];
                    $telefoneCliente        = $array['telefoneCliente'];
                ?>
                    <tr>
                        <td><?php echo $nomeCliente ?></td>
                        <td><?php echo $cepCliente ?></td>
                        <td><?php echo $cpfCliente ?></td>
                        <td><?php echo $ederecoClinte ?></td>
                        <td><?php echo $telefoneCliente ?></td>
                        <td><a class="bx bx-edit-alt box-icon" style="text-decoration: none;" href="editarCliente.php?id=<?php echo $idCliente ?>" role="button" id="new"></a>
                            <a class="bx bxs-trash box-icon" href="deletarCliente.php?id=<?php echo $idCliente ?>" role="button" id="new"></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html> 