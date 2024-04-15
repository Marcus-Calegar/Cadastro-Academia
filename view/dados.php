<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Tabela de dados</title>
</head>

<body class="text-center">
    <?php
    include '../model/Aluno.php';
    $aluno = new Aluno();
    $resultado = $aluno->SelectTabela();
    ?>
    <table class="table table-dark table-striped text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Sexo</th>
                <th scope="col">Endereco</th>
                <th scope="col">Numero Casa</th>
                <th scope="col">Complemento</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">UF</th>
                <th scope="col">Modalidade</th>
                <th scope="col" colspan="2">Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resultado as $key => $value) :
            ?>
                <tr>
                    <td><?= $value['id']; ?></td>
                    <td><?= $value['nome']; ?></td>
                    <td><?= $value['email']; ?></td>
                    <td><?= $value['sexo']; ?></td>
                    <td><?= $value['endereco']; ?></td>
                    <td><?= $value['numeroCasa']; ?></td>
                    <td><?= $value['complemento']; ?></td>
                    <td><?= $value['bairro']; ?></td>
                    <td><?= $value['cidade']; ?></td>
                    <td><?= $value['uf']; ?></td>
                    <td><?= $value['modalidade']; ?></td>
                    <td><a href="atualizar.php?id=<?= $value['id'] ?>" class="btn btn-warning padding"><i class="bi bi-pencil-square"></i></a> </td>
                    <td><a href="../controller/ControllerDelete.php?id=<?= $value['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary">
        <a href="../index.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Voltar</a>
    </button>
</body>

</html>