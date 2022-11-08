<!DOCTYPE html>
<html>

<head>
    <title>Todas Disciplinas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h2>Todas as disciplinas</h2>
    <table border=1 class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Carga Horária</th>
            <th>Ementa</th>
            <th>Ações</th>
        </tr>
        <?php
        require_once "Disciplina.class.php";
        $objDisciplina = new Disciplina();
        $disciplinas = $objDisciplina->buscarTodasDisciplinas();

        foreach ($disciplinas as $dc) {
            echo "<tr>";
            echo "<td>" . $dc["nome"] . "</td>";
            echo "<td>" . $dc["cargaHoraria"] . "</td>";
            echo "<td>" . $dc["ementa"] . "</td>";
            echo "<td><a href='atualizar-disciplina.php?nome={$dc["nome"]}&carga={$dc["cargaHoraria"]}&ementa={$dc["ementa"]}'> Editar</a> | Excluir</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>

<style>
    body {
        text-align: center;
    }

    table {
        margin: 0 auto;
    }

    th {
        text-align: center;
        background-color: #cfcfcf;
    }

    td {
        text-align: left;
    }

    h2 {
        margin-bottom: 30px;
    }
</style>