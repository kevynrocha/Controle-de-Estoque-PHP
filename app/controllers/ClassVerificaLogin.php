<?php
session_start();
require_once '../models/ClassConexao.php';

# Limitando o acesso somente com login e senha.
if(empty($_POST['nome']) || empty($_POST['senha']))
	header('location:../views/index.php');

# Autenticação do usuario e senha.
$nome  = $_POST['nome'];
$senha = $_POST['senha'];


$sql = ('SELECT db_nome db_senha FROM db_login WHERE db_nome=:nome and db_senha=:senha');

$stmt = new Conexao;
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':senha', $senha);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if($result == false){
	header('location:../views/index.php');
}else{
	header('location:../views/main.php');
}

# Sessão
$_SESSION['nome'] = ucfirst($nome);
