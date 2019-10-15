<?php

namespace Models;

use Models\Conexao;

class ProdutoCrud {		

	public function createEntrada(Produto $p) {
		$sql = 'INSERT INTO tbl_entrada (entrada_nome, entrada_quantidade, entrada_valor, entrada_data) VALUES (?, ?, ?, ?)';
		       
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome(), \PDO::PARAM_STR);
		$stmt->bindValue(2, $p->getQuantidade(), \PDO::PARAM_INT);
		$stmt->bindValue(3, $p->getValor());
		$stmt->bindValue(4, $p->getData());		
		$stmt->execute();
	}

	public function createProduto(Produto $p) {
		$sql = 'INSERT INTO tbl_produto (produto_nome, produto_descricao) VALUES (?, ?)';
		       
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome(), \PDO::PARAM_STR);		
		$stmt->bindValue(2, $p->getDescricao(), \PDO::PARAM_STR);
		$stmt->execute();		
	}

	public function read() {
		$sql = 'SELECT * FROM db_produtos';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute(); 		
	}

	public function updateProduto(Produto $p) {
		$sql = 'UPDATE tbl_produto SET produto_nome = ?, produto_descricao = ?  WHERE produto_id = ?';
		
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome(), \PDO::PARAM_STR);		
		$stmt->bindValue(2, $p->getDescricao(), \PDO::PARAM_STR);
		$stmt->bindValue(3, $p->getId());
		$stmt->execute();
	}

	public function delete($id) {

		$sql = 'DELETE FROM tbl_produto WHERE produto_id = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute(); 		
	}
}