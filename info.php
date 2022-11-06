<h1>DADOS DE USUÁRIO</h1>
<section>
    <p class="center"><img src="<?=$info['img']?>"></p>
    <p>Nome: <?= $info['name'] ?> </p>
    <p>E-mail: <?= $info['email'] ?> </p>
    <p>CPF: <?= $info['cpf'] ?> </p>
    <hr>
    <form action="display.php" method="get">
        <p>Cateto 1: <input type="number" name="n1"></p>
        <p>Cateto 2: <input type="number" name="n2"></p>
        <input type="submit" value="Calcular Hipotenusa">
    </form>
</section>
