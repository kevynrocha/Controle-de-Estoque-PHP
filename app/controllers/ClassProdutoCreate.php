<?php

require_once '..\models\ClassProdutoCRUD.php';
require_once '..\models\ClassConexao.php';
require_once '..\models\ClassConexao.php';
require_once '..\models\variaveis.php';

$produto = new Produto();
$produto->setNome($nome);
$produto->setQuantidade($quantidade);
$produto->setValor($valor);
$produto->setData($data);
$produto->setDescricao($descricao);

$produtoDao = new ProdutoDao();
$produtoDao->create($produto);

header('location:http://estoquelucas.webhostapp.com/cadastrarProdutos.php');
