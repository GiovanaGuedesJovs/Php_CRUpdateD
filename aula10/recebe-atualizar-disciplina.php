<?php

    require_once("Disciplina.class.php");

    $nome = $_POST["nome"];
    $carga = $_POST["carga"];
    $ementa = $_POST["ementa"];

    $objetoDisciplina = new Disciplina($nome, $carga, $ementa);
    $objetoDisciplina->atualizarDisciplina();

    header("Location: todas-disciplinas.php");

?>