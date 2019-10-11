<?php
session_start();
require_once '../../config.php';
require_once '../../class/variaveis.php';

use Models\Produto;
use Models\ProdutoCRUD;

$_SESSION['mensagem_editar'] = "";

$produto = new Produto();
$produto->setID($_GET['id']);
$produto->setNome($nome);
$produto->setQuantidade($quantidade);
$produto->setValor($valor);
$produto->setData($data);
$produto->setDescricao($descricao);

$produtoCRUD = new ProdutoCRUD();
$produtoCRUD->update($produto);

header('location: ../views/relatorioProdutos.php');
