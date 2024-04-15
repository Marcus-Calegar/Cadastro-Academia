<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atualizar</title>
</head>

<body onload="Alerta()">
    <?php
    require_once '../model/Aluno.php';
    $aluno = new Aluno();
    $id = $_POST['id'];
    $mensagem;
    if (null !== $aluno->Atualizar($id)) {
        $mensagem = "Atualizacao bem sucedida!";
    } else {
        $mensagem = "Erro ao atualizar!";
    }
    ?>
    <script>
        function Alerta() {
            var msg = alert("<?= $mensagem ?>");
            window.location.href = "../index.php"
        }
    </script>
</body>

</html>