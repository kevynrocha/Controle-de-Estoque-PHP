<?php
session_start();
require_once '../../config.php';

use Models\Produto;
use Models\ProdutoCRUD;

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$_SESSION['mensagem'] = "";

$produto = new Produto();
$produto->setNome($nome);
$produto->setDescricao($descricao);

$produtoCRUD = new ProdutoCRUD();
$produtoCRUD->createProduto($produto);

var_dump($produtoCRUD);

//header('location: ../views/cadastrarProdutos.php');