<?php

require_once '..\models\ProdutoCRUD.php';
require_once '..\models\Conexao.php';

$produtoCRUD = new ProdutoCrud();
$produtoCRUD->delete($_GET['id']);
     header('location:../views/relatorioProdutos.php');
