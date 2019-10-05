<?php


require_once '..\model\produtoDao.php';
require_once '..\model\conexao.php';
require_once '..\model\produto.php';
require_once '..\model\variaveis.php';

$produto = new Produto();
$produto->setNome($nome);
$produto->setQuantidade($quantidade);
$produto->setValor($valor);
$produto->setData($data);
$produto->setDescricao($descricao);
$produtoDao = new ProdutoDao();
$produtoDao->create($produto);

header('location:http://estoquelucas.webhostapp.com/cadastrarProdutos.php');
