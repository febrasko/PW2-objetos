<link rel="stylesheet" href="style.css">

<?php

require_once 'config.php';
require_once 'class/get.php';
require_once 'class/session.php';

$session = new Session();
$get = new Get();

if ($session->get('email') != '') {
    foreach ($_config as $user => $info) {
        if ($session->get('email') == $info['email'] && $session->get('pass') == $info['pass']) {
            require_once 'infodisplay.php';
            break;
        }
    }
} else echo 'Faça <a href="index.html">Login</a>';