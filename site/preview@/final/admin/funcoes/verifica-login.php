<?php
include 'biblioteca.php';

$login = $_POST["login"];
$senha = $_POST["senha"];

verifica_login($login, $senha);


?>