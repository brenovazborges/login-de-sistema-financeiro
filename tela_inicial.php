<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA INICIAL</title>
    <link rel="stylesheet" href='css/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div style="font-size: 30px; color: yellow">
        <?php
        session_start();
        if(isset($_SESSION['id'])){
           $id =  $_SESSION['id'];
           echo "Olá $id";
        }
        
        
        
        ?>
    </div>

    <div class=title>
        <h1> SEJA BEM VINDO AO MEU SITE DE AGIOTAGEM</h1>
        <P>espero que sua experiencia seja ótima e que você pague no dia hein</P>
    </div>


    <a class="btn btn-danger" href="index.html" role="button">Voltar ao login</a>
    <a class="btn btn-success" href="lancamento.html" role="button">Lançamento</a>
    <a class="btn btn-warning" href="categoria.html" role="button">Categoria</a>

</body>
</html>