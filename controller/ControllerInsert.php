<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inserir</title>
</head>

<body>
    <?php
    include_once '../model/Aluno.php';
    $aluno = new Aluno();
    if($aluno->inserir()){
        echo "Insert bem sucedido!";
        unset($_POST);
    }else{
        echo "Erro ao inserir!";
    }
    ?>
    <button type="button" class="btn btn-primary">
        <a href="../index.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Voltar</a>
    </button>
</body>

</html>