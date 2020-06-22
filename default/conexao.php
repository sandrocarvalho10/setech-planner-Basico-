<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'admin_rh');
define('SENHA', 'adminrh1234');
define('DB', 'admin_rh');

$conexao = new mysqli(HOST,USUARIO,SENHA,DB);

if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}