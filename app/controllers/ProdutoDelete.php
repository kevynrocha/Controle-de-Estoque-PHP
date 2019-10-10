<?php

session_start();

require_once '../../config.php';

use Models\ProdutoCrud;

$_SESSION['mensagem'] = "Produto deletado!";

$produtoCRUD = new ProdutoCrud();
$produtoCRUD->delete($_GET['id']);

header('location:../views/relatorioProdutos.php');
