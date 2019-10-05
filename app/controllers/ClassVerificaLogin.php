<?php
session_start();

# Página de verificação só será acessada se os dois campos forem preenchidos
if(empty($_POST['nome']) || empty($_POST['senha']))
	header('location:../views/index.php');



