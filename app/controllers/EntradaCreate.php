<?php
session_start();
require_once '../../config.php';

use Models\Produto;
use Models\ProdutoCRUD;

filter_var($nome = $_POST['nome'],FILTER_SANITIZE_SPECIAL_CHARS);
filter_var($quantidade = $_POST['quantidade'],FILTER_VALIDATE_INT);
filter_var($valor = $_POST['valor'],FILTER_VALIDATE_FLOAT);
$data = $_POST['data'];

$_SESSION['mensagem'] = "";

$produto = new Produto();
$produto->setNome($nome);
$produto->setQuantidade($quantidade);
$produto->setValor($valor);
$produto->setData($data);

$produtoCRUD = new ProdutoCRUD();
$produtoCRUD->createEntrada($produto);

header('location: ../views/entradaProdutos.php');