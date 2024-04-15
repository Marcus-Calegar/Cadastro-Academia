<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Cadastro</title>
    </head>

    <body>
        <?php
        require_once '../model/Aluno.php';
        function apiUF()
        {
            $urlApiUF = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/";
            $UF = json_decode(file_get_contents($urlApiUF));
            return $UF;
        }

        $resultadoUF = apiUF();
        $arrayModalides = array("Musculação", "Natação", "Pilates", "Futebol");

        $aluno = new Aluno();
        $id = $_GET['id'];
        $campo = $aluno->SelectID($id);
        foreach ($campo as $value) :
        ?>
            <form method="post" action="../controller/ControllerUpdate.php?" class="text-center my-auto" id="cadastroForm">
                <h1>Atualizar de Aluno</h1>
                <div class="container justify-content-center">
                    <div class="row my-2">
                        <input type="text" name="id" value="<?= $id; ?>" hidden>
                    </div>
                    <div class="row my-2">
                        <label for="inputNome" class="form-label col">Nome:</label>
                        <input type="name" class="form-control-sm col-10" name="nome" value="<?= $value['nome'] ?>">
                    </div>
                    <div class="row my-2">
                        <label for="inputEmail" class="form-label col">E-mail:</label>
                        <input type="email" class="form-control-sm col-5" name="email" value="<?= $value['email'] ?>">
                        <div class="d-flex col-5 align-items-center justify-content-center" id="radio-buttons">
                            <label>Sexo:</label>
                            <div class="form-check margin">
                                <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino" <?= ($value['sexo'] === 'Feminino') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="feminino">Feminino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino" <?= ($value['sexo'] === 'Masculino') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="outro" value="Outro" <?= ($value['sexo'] === 'Outro') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="outro">Outro</label>
                            </div>
                        </div>

                    </div>
                    <div class="row my-2">
                        <label for="inputEndereco" class="form-label col">Endereco:</label>
                        <input type="text" class="form-control-sm col-10" name="endereco" value="<?= $value['endereco'] ?>">
                    </div>
                    <div class="row my-2">
                        <label for="numeroCasa" class="form-label col">Numero:</label>
                        <input type="text" class="form-control-sm col-4" id="inputName" name="numeroCasa" value="<?= $value['numeroCasa'] ?>">
                        <label for="inputComplemento" class="form-label col">Complemento:</label>
                        <input type="text" class="form-control-sm col-4" name="complemento" value="<?= $value['complemento'] ?>">
                    </div>
                    <div class="row my-2">
                        <label for="inputBairro" class="form-label col">Bairro:</label>
                        <input type="text" class="form-control-sm col-4" name="bairro" value="<?= $value['bairro'] ?>">
                        <label for="inputCidade" class="form-label col">Cidade:</label>
                        <input type="name" class="form-control-sm col-4" name="cidade" value="<?= $value['cidade'] ?>">
                    </div>
                    <div class="row my-2">
                        <label for="" class="col">UF: </label>
                        <select class="form-control-sm col-4" aria-label="Default select" name="uf" form="cadastroForm">
                            <option selected><?= $value['uf'] ?></option>
                            <?php foreach ($resultadoUF as $UF) : ?>
                                <option value="<?= $UF->sigla; ?>"><?= $UF->sigla; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="" class="col">Modalidade: </label>
                        <select class="col-4" aria-label="Default select" name="modalidade" form="cadastroForm">
                            <option selected><?= $value['modalidade'] ?></option>
                            <?php foreach ($arrayModalides as $modelidade) : ?>
                                <option value="<?= $modelidade ?>"><?= $modelidade ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Atualizar">
                <button type="button" class="btn btn-primary">
                    <a href="../view/dados.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Voltar</a>
                </button>
            </form>
        <?php endforeach; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    </html>
</body>

</html>