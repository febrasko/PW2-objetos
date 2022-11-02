<?php

require_once 'user.php';
require_once 'config.php';
require_once 'post.php';
require_once 'cookie.php';

$user = new User();
$post = new Post();
$cookie = new Cookie();

if ($post->get('email') != '' && $post->get('password') != '') {
    $email = $post->get('email');
    $password = $post->get('password');
    if ($email == '' || $password == '') {
        echo "<p>Preencha todos os campos!</p>";
    } elseif ($email != $_config['email'] || $password != $_config['password']) {
        echo "<p>Usuário ou senha estão incorretos!</p>";
    } else {
        setcookie('user', $email);
        require_once 'pagina1.html';
    }
}

else if (isset($_COOKIE['user'])){
    if ($_COOKIE['user'] == $_config['email']) {
        require_once 'pagina1.html';
    }
} else {
    echo "faça login";
}
?>