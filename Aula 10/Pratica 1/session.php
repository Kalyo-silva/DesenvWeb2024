<?php
session_start();

if (!isset($_SESSION['user'])){

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['senha'];
    $_SESSION['session_start'] = time();
}

$_SESSION['last_request'] = time();

$user = $_SESSION['user'];
$password = $_SESSION['password'];
$session_start = date('d/m/y H:m:s',$_SESSION['session_start']);
$last_request = date('d/m/y H:m:s',$_SESSION['last_request']);
$session_timer =  date('h:m:s',$_SESSION['last_request'] - $_SESSION['session_start']);


echo "<h1>User: $user</h1> 
     <h2>Password: $password</h2>
     <h2>Início da seção: $session_start</h2>
     <h2>Ultima Requisição: $last_request</h2>
     <h2>Tempo da seção: $session_timer</h2>";
