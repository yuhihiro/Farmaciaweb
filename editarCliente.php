<?php
    include 'conexao.php';  
    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formularioCliente.css">
    <title>Editar Cliente</title>
</head>

<body>
    <header>
        <h1>Editar Cliente</h1>
        <p>Obrigado(a) por nos ajudar a melhorar nossos serviços.</p>
    </header>
    <section>
        <div class="container">
            <form action="atualizarCliente.php" method="POST">
                <?php

                $sql = "SELECT * FROM `cliente` WHERE idCliente = $id";

                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $idCliente               = $array['idCliente'];
                    $nomeCliente            = $array['nomeCliente'];
                    $cpfCliente             = $array['cpfCliente'];         
                    $cepCliente             = $array['cepCliente'];
                    $ederecoClinte          = $array['ederecoCliente'];
                    $telefoneCliente        = $array['telefoneCliente'];

                ?>

                    <div class="main">
                        <div class="from">

                            <div class="from-grupo">
                                <label>Nome</label>
                                <input type="text" name="nomeCliente" value="<?php echo $nomeCliente ?>" placeholder="Digite seu nome:" required />
                            </div>

                            <div class="from-grupo">
                                <label>CPF</label>
                                <input type="number" name="cpfCliente" value="<?php echo $cpfCliente ?>" placeholder="Digite seu CPF:" required />
                            </div>

                            <div class="from-grupo">
                                <label>CEP</label>
                                <input type="number" name="cepCliente" value="<?php echo $cepCliente ?>" placeholder="Digite seu CEP:" required />
                            </div>

                            <div class="from-grupo">
                                <label>Endereço</label>
                                <input type="text" name="ederecoCliente" value="<?php echo $ederecoClinte ?>" placeholder="Digite sua Endereço:" required />
                            </div>

                            <div class="from-grupo">
                                <label>Telefone</label>
                                <input type="number" name="telefoneCliente" value="<?php echo $telefoneCliente ?>" placeholder="Digite sua Cliente:" required />
                            </div>

                            <div class="button">
                                <button type="submit">Atualizar</button>
                            </div>
                            <footer>
                                <p>Drogaria<strong>12</strong> - 2022</p>
                            </footer>
                        </div>
                    </div>
            </form>
            <?php } ?>
        </div>
    </section>
</body>

</html>