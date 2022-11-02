<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body class="margin_auto">
    <?php
    if ($_POST != []) {
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $autor = $_POST['autor'];
        if ($titulo == '' || $conteudo == '' || $autor == '') {
            echo "<p>Preencha todos os campos!</p>";
        }} 
    if ($_COOKIE['user'] == 'etec' && $_POST == []) {
        echo "<p>Você só pode ver essa página enviando os dados da tela anterior!</p>";
    } else{
    ?>
    <div class="areatitulo">
        <img src="img/chainsawbanner.jpg" width="100%">
        <h1 class="titulo"> <?= $titulo ?> </h1>
    </div>
    <section>
        <p> <?= $conteudo ?> </p>
        <p class="direita"> <?= $autor ?> </p>
    </section>
    <?php } ?>
</body>
</html>