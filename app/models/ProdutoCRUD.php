<?php

class ProdutoCrud {	

	public function create(Produto $p) {
		$sql = 'INSERT INTO db_produtos (nome, quantidade, valor, data, descricao) VALUES (?, ?, ?, ?, ?)';
		       
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome(), PDO::PARAM_STR);
		$stmt->bindValue(2, $p->getQuantidade(), PDO::PARAM_INT);
		$stmt->bindValue(3, $p->getValor());
		$stmt->bindValue(4, $p->getData());
		$stmt->bindValue(5, $p->getDescricao(), PDO::PARAM_STR);
		$stmt->execute(); 
		
	}

	public function read() {
		$sql = 'SELECT * FROM db_produtos';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute(); 
		//$resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(Produto $p) {
		$sql = 'UPDATE db_produtos SET nome = ?, descricao = ? WHERE id = ?';                 
		
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getDescricao());
		$stmt->bindValue(3, $p->getId());
		$stmt->execute();		 
	}

	public function delete($id) {

		$sql = 'DELETE FROM db_produtos WHERE id = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute(); 
	}
}
?>