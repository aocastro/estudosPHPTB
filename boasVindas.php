<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas Vindas</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form method="POST">
                    <div class="form-group">
                        <label>Digite seu nome</label>
                        <input type="text" name="nome" id="nome" class="form-control form-control-lg">
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-12 col-sm-6 col-md-3">
                            <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-sm-8 col-md-6">
                <div class="alert alert-primary">
                    <h3>
                        <?php
                            // Bloco de código em PHP
                            if(isset($_POST['nome'])){
                                echo "Seja bem vindo ".$_POST['nome'];
                            }else{
                                echo "Digite seu nome ...";
                            }
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>