<?php
session_start();
require_once '../../config.php';

use Models\Produto;
use Models\ProdutoCRUD;

filter_var($nome = $_POST['nome'],FILTER_SANITIZE_SPECIAL_CHARS);
filter_var($descricao = $_POST['$descricao'],FILTER_SANITIZE_ENCODED);


$_SESSION['mensagem'] = "";

$produto = new Produto();
$produto->setNome($nome);
$produto->setDescricao($descricao);

$produtoCRUD = new ProdutoCRUD();
$produtoCRUD->createProduto($produto);

header('location: ../views/cadastrarProdutos.php');
