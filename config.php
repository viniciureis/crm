<?php
    define('HOST', '127.0.0.1:3307'); // constante para o host
    define('USER', 'root'); // constante para o usuário do bd
    define('PASS', ''); // constante para a senha do bd
    define('BASE', 'crm'); // constante para o nome do bd

    $conn = new MySQLi(HOST, USER, PASS, BASE);
?>