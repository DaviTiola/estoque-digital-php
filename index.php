<?php

$produtos = [
    [
    "nome"=>"banana",
    "preco"=>2.99,
    "estoque"=>true
    ],


    [
    "nome"=>"Maçã Verde",
    "preco"=>1.99,
    "estoque"=>true
    ]
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estoque Digital</title>
</head>
<body>
<h1>Nosso Estoque</h1>

<div class="lista-produtos">
    <?php foreach($produtos as $produto){?>

        <div class="produto">

            <div class="produto-nome">
                <?php echo $produto["nome"]; ?>
            </div>

            <div class="produto-preco">
                R$ <?php echo $produto["preco"]; ?>
            </div>

            <div class="produto-estoque">
                <?php if ($produto["estoque"] === true) { ?>

                    <span>Em estoque</span>

                <?php } else { ?>

                    <span style="color: red;">ESGOTADO</span>

                <?php } ?>
            </div>

        </div>

    <?php
    }
    ?>



</div>
</body>
</html>