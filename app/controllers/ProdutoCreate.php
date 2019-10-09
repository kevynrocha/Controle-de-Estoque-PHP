<?php
session_start();
require_once '../../config.php';
require_once '../../class/variaveis.php';

use Models\Produto;
use Models\ProdutoCRUD;

$produto = new Produto();
$produto->setNome($nome);
$produto->setQuantidade($quantidade);
$produto->setValor($valor);
$produto->setData($data);
$produto->setDescricao($descricao);

$produtoCRUD = new ProdutoCRUD();
$produtoCRUD->create($produto);

header('location: ../views/cadastrarProdutos.php');