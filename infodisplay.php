<h1>VIEW</h1>
<section>
    <p class="center"><img src="<?=$info['img']?>"></p>
    <p>Nome: <?= $info['name'] ?> </p>
    <p>E-mail: <?= $info['email'] ?> </p>
    <p>CPF: <?= $info['cpf'] ?> </p>
    <hr>
    <?php
    if ($get->get('n1') != '' && $get->get('n2') != '' && $get->get('n1') > 0 && $get->get('n2') > 0){
        $n1 = $get->get('n1');
        $n2 = $get->get('n2');
        $res = sqrt($n1**2 + $n2**2);
        echo '<p class="res"> Resultado: '.$res.'</p>';
    } else echo '<p class="res">Operação Inválida!</p>';
    ?>
</section>
