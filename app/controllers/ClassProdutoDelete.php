<?php

require_once '..\model\produtoDao.php';
require_once '..\model\conexao.php';
require_once '..\model\produto.php';
require_once '..\model\variaveis.php';

$produtoDao = new ProdutoDao();
$produtoDao->Delete(6);
$produtoDao->Read();


foreach ($produtoDao->read() as $produto) {
	echo $produto['nome'].'<br>'.$produto['descricao'].'hr';
}