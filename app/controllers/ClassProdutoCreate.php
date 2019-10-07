<?php
session_start();
require_once '../models/ClassProdutoCRUD.php';
require_once '../models/ClassConexao.php';
require_once '../models/ClassProduto.php';
require_once '../../class/variaveis.php';

$produto = new Produto();
$produto->setNome($nome);
$produto->setQuantidade($quantidade);
$produto->setValor($valor);
$produto->setData($data);
$produto->setDescricao($descricao);

$produtoCRUD = new ProdutoCRUD();
$produtoCRUD->create($produto);

header('location: ../views/cadastrarProdutos.php');