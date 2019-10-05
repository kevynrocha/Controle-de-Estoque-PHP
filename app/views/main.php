<?php
session_start();

# Limitando o acesso somente com login e senha.
if(!isset($_SESSION['nome']))
	header('location:../views/index.php');

echo "Bem vindo, {$_SESSION['nome']}";

session_destroy();
