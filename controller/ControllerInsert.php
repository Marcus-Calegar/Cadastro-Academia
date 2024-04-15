<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inserir</title>
</head>

<body onload="Alerta()">
    <?php
    require_once '../model/Aluno.php';
    $aluno = new Aluno();
    $mensagem;
    session_start();
    if (isset($_SESSION['Inserir']) && $_SESSION['Inserir'] == true) {
        if ($aluno->inserir()) {
            $mensagem = "Insert bem sucedido!";
        } else {
            $mensagem = "Erro ao inserir!";
        }
        unset($_SESSION['Inserir']);
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