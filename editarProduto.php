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
            <form action="atualizarProduto.php" method="POST">
                <?php

                $sql = "SELECT * FROM `produto` WHERE idProduto = $id";

                $buscar = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)) {

                    $idProduto = $array['idProduto'];
                    $nomeProduto  = $array['nomeProduto'];
                    $marcaProduto    = $array['marcaProduto'];
                    $valorProduto    = $array['valorProduto'];
                    $quantidadeProduto     = $array['quantidadeProduto'];

                ?>

                    <div class="main">
                        <div class="from">

                            <div class="from-grupo">
                                <label>Nome</label>
                                <input type="text" name="nomeProduto" value="<?php echo $nomeProduto ?>" placeholder="Informe nome Produto:" required />
                            </div>

                            <div class="from-grupo">
                                <label>Marca Produto</label>
                                <input type="text" name="marcaProduto" value="<?php echo $marcaProduto ?>" placeholder="Informe a marca:" required />
                            </div>

                            <div class="from-grupo">
                                <label>Valor Produto</label>
                                <input type="number" name="valorProduto" value="<?php echo $valorProduto ?>" placeholder="Informe o valor:" required />
                            </div>

                            <div class="from-grupo">
                                <label>Quantidade</label>
                                <input type="number" name="quantidadeProduto" value="<?php echo $quantidadeProduto ?>" placeholder="Informe a quantidade:" required />
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