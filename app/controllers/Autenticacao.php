<?php
session_start();

require_once '../../config.php';

# Limitando o acesso somente com login e senha.


# Autenticação do usuario e senha.
$nome  = $_POST['nome'];
$senha = $_POST['senha'];

$sql = ('SELECT usuario senha FROM tbl_login WHERE usuario=:nome and senha=:senha');

use Models\Conexao;
$stmt = new Conexao;
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':senha', $senha);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if($result == false){
	header('location:../views/erro.php');
}else{
	header('location:../views/main.php');	
}

# Sessão com nome do usuario e letra maiuscula
$_SESSION['nome'] = ucfirst($nome);
