<?php

require_once '..\models\ClassProdutoCRUD.php';
require_once '..\models\ClassConexao.php';

$produtoCRUD = new ProdutoCrud();
$produtoCRUD->delete($_GET['id']);
     header('location:../views/relatorioProdutos.php');
