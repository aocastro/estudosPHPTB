<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Simples</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">
                <h2 class="text-center text-dark">
                    Trabalhando com array
                </h2>
                <h4 class="text-dark">
                    Construindo um array
                </h4>
                <p class="text-dark">
                    $dados = array('Banana', 'Maça', 'Goiaba');
                </p>
                <p class="text-dark">
                    $dados = ['Banana', 'Maça', 'Goiaba'];
                </p>
                <h4 class="text-dark">
                    Imprimindo o array na tela com o comando var_dump();
                </h4>
                <?php
                    $dados = ['Banana', 'Maça', 'Goiaba'];

                    echo '<p class="text-dark">'.var_dump($dados).'</p>';
                ?>
                <h4 class="text-dark">
                    Imprimindo o array na tela de forma organizada com o json_encode();
                </h4>
                <?php
                    $dados = ['Banana', 'Maça', 'Goiaba'];

                    echo '<p class="text-dark">'.json_encode
                    ($dados).'</p>';
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>