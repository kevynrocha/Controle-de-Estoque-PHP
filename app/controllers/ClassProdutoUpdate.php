<?php

require_once '..\model\produtoDao.php';
require_once '..\model\conexao.php';
require_once '..\model\produto.php';
require_once '..\model\variaveis.php';

$produto = new Produto();
$produto->setId(2);
$produto->setNome('LINGUICINHA');
$produto->setDescricao('PEITO');

$produtoDao = new ProdutoDao();
$produtoDao->Update($produto);

