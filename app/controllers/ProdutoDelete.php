<?php

require_once '../../config.php';

use Models\ProdutoCrud;

$produtoCRUD = new ProdutoCrud();
$produtoCRUD->delete($_GET['id']);
     header('location:../views/relatorioProdutos.php');
