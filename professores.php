<?php
$aulas[] = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8">
                <form method="post">
                    <div class="form-group">
                        <label>Nome do professor</label>
                        <input type="text" name="professor" id="professor" class="form-control">
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-sm-6">
                            <label>Disciplina</label>
                            <input type="text" name="disciplina" id="disciplina" class="form-control">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Dia de aula</label>
                            <input type="text" name="dia" id="dia" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-12 col-sm-4">
                            <button class="btn btn-primary btn-block">
                                Adicionar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-8 alert alert-info">
                <h4 class="text-center border-bottom text-dark">
                    Lista de aulas
                </h4>
                <?php
                    if(isset($_POST['professor']) && isset($_POST['disciplina']) && isset($_POST['dia'])){

                        $aulas = [
                            'Professor' => $_POST['professor'],
                            'Disciplina' => $_POST['disciplina'],
                            'Dia' => $_POST['dia']
                        ];

                        // foreach($aulas as $aula){
                        //     echo '<p class="text-dark">Disciplina: '.$aula['Professor'].' | Professor: Nononono | Aula dia de: Nononono</p>';
                        // }

                        var_dump($aulas);

                    }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>