,<!DOCTYPE html>
<html>
    <head>
        <title>
            Atualizar Disciplina
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
        <style>
            input, textarea{
                display: block;
            }
        </style>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <?php 
            $nome = $_GET["nome"];
        ?>
        <form method="POST" action="">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value = "<?php echo $nome;?>">
            
            <label for="carga">Carga horária:</label>
            <input type="text" name="carga" id="carga">
            
            <label for="Ementa">Ementa:</label>
            <textarea name="ementa" id="ementa" cols="30" rows="5">
            </textarea>
            <button type="submit">Enviar</button>
            
        </form>
    </body>
</html>