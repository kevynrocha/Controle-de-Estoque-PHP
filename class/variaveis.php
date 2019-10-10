<?php

$nome = preg_replace('/[^[:alpha:]_]/', '',$_POST['nome']);
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$data = $_POST['data'];
$descricao = addslashes($_POST['descricao']);
