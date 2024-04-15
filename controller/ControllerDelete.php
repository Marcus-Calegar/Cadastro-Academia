<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>

<body onload="Confirmar()">
    <?php
    require_once '../model/Aluno.php'
    ?>
    <script>
        function Confirmar() {
            var msg = confirm("Deseja apagar os dados?");
            if (msg == true) {
                <?php
                $aluno = new Aluno();
                $id = $_GET['id'];
                $aluno->Deletar($id);
                ?>
            }
            window.location.href = "../index.php"
        }
    </script>
</body>

</html>