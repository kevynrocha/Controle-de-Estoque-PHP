<?php
session_start();
require_once '../../config.php';

use Models\Produto;
use Models\ProdutoCRUD;

$_SESSION['mensagem_editar'] = "";

$produto = new Produto();
$produto->setID($_GET['id']);
$produto->setNome($nome);
$produto->setDescricao($descricao);

$produtoCRUD = new ProdutoCRUD();
$produtoCRUD->update($produto);

header('location: ../views/relatorioProdutos.php');
