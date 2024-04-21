<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Aluno</title>
</head>

<body>
    <?php
    function apiUF()
    {
        $urlApiUF = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/";
        $UF = json_decode(file_get_contents($urlApiUF));
        return $UF;
    }
    session_start();

    $resultadoUF = apiUF();
    $arrayModalides = array("Musculação", "Natação", "Pilates", "Futebol");

    ?>

    <form method="post" action="controller/ControllerInsert.php" class="text-center my-auto" id="cadastroForm">
        <h1>Cadastro de Aluno</h1>
        <div class="container justify-content-center">
            <div class="row my-2">
                <label for="inputNome" class="form-label col">Nome:</label>
                <input type="name" class="form-control-sm col-10" name="nome">
            </div>
            <div class="row my-2">
                <label for="inputEmail" class="form-label col">E-mail:</label>
                <input type="email" class="form-control-sm col-5" name="email">
                <div class="d-flex col-5 align-items-center justify-content-center" id="radio-buttons">
                    <label>Sexo:</label>
                    <div class="form-check margin">
                        <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino">
                        <label class="form-check-label" for="feminino">Feminino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino">
                        <label class="form-check-label" for="masculino">Masculino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="outro" value="Outro">
                        <label class="form-check-label" for="outro">Outro</label>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <label for="inputEndereco" class="form-label col">Endereco:</label>
                <input type="text" class="form-control-sm col-10" name="endereco">
            </div>
            <div class="row my-2">
                <label for="numeroCasa" class="form-label col">Numero:</label>
                <input type="text" class="form-control-sm col-4" id="inputName" name="numeroCasa">
                <label for="inputComplemento" class="form-label col">Complemento:</label>
                <input type="text" class="form-control-sm col-4" name="complemento">
            </div>
            <div class="row my-2">
                <label for="inputBairro" class="form-label col">Bairro:</label>
                <input type="text" class="form-control-sm col-4" name="bairro">
                <label for="inputCidade" class="form-label col">Cidade:</label>
                <input type="name" class="form-control-sm col-4" name="cidade">
            </div>
            <div class="row my-2">
                <label for="" class="col">UF: </label>
                <select class="form-control-sm col-4" aria-label="Default select" name="uf" form="cadastroForm">
                    <option selected></option>
                    <?php foreach ($resultadoUF as $UF) : ?>
                        <option value="<?= $UF->sigla; ?>"><?= $UF->sigla; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="" class="col">Modalidade: </label>
                <select class="col-4" aria-label="Default select" name="modalidade" form="cadastroForm">
                    <option selected></option>
                    <?php foreach ($arrayModalides as $modelidade) : ?>
                        <option value="<?= $modelidade ?>"><?= $modelidade ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" id="btnInserir" onclick="SessaoInsert()">
        <button type="button" class="btn btn-primary">
            <a href="../trabalho crud/view/dados.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Tabela</a>
        </button>
        <button type="button" class="btn btn-primary" id="btnApagar" onclick="limparCampos()">Limpar Campos</button>
    </form>

    <script>
        function limparCampos() {
            document.getElementById("cadastroForm").reset();
        }
        var btnInserir = document.getElementById("btnInserir");
        btnInserir.addEventListener("click", function() {
            <?php
            $_SESSION['Inserir'] = true;
            ?>
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>