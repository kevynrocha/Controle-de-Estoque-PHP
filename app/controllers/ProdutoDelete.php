<?php

session_start();

require_once '../../config.php';

use Models\ProdutoCRUD;

$_SESSION['mensagem_excluir'] = "";

$produtoCRUD = new ProdutoCRUD();
$produtoCRUD->delete($_GET['id']);

var_dump($_GET['id'])
;

header('location:../views/relatorioProdutos.php');
