<?php
    include  'conexao.php' ;
    $id = $_GET [ 'id' ];
?>

<?php
                    $sql = " SELECT * FROM `produto` WHERE idProduto = $id ";

                    $busca = mysqli_query( $conexao , $sql );

                    while ( $array = mysqli_fetch_array( $busca )){
                        $idProduto = $array['idProduto'];
                        $nomeProduto  = $array['nomeProduto'];
                        $marcaProduto    = $array['marcaProduto'];
                        $valorProduto    = $array['valorProduto'];
                        $quantidadeProduto     = $array['quantidadeProduto'];
                    }
?>

