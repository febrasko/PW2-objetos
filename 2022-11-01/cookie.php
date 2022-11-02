<?php

class Cookie
{
    public function set(string $index, $data){
        if (!empty($index)) $_SESSION[$index] = $data;
    }

    public function get(string $index){
        if (empty($_SESSION[$index])) return '';
        return isset($_SESSION[$index]) ? $_SESSION[$index] : '';
    }
}