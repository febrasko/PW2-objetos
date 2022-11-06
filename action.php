<link rel="stylesheet" href="style.css">

<?php

require_once 'config.php';
require_once 'class/post.php';
require_once 'class/session.php';

$post = new Post();
$session = new Session();
$isLogged = false;

if ($post->get('email') != '' && $post->get('pass') != '') {
    $email = $post->get('email');
    $pass = $post->get('pass');
    foreach ($_config as $user => $info) {
        if ($email == $info['email'] && $pass == $info['pass']) {
            $isLogged = true;
            $session->set('email', $email);
            $session->set('pass', $pass);
            require_once 'info.php';
            break;
        }
    }
} else if ($session->get('email') != '') {
    foreach ($_config as $user => $info) {
        if ($session->get('email') == $info['email'] && $session->get('pass') == $info['pass']) {
            $isLogged = true;
            require_once 'info.php';
            break;
        }
    }
}
if ($isLogged == false) echo '<p>Login Inválido. <a href="index.html">Página de Login</a></p>'; 
