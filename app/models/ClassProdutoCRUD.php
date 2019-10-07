<?php

class ProdutoCrud {	

	public function Create(Produto $p) {
		$sql = 'INSERT INTO produtos (nome, quantidade, valor, data, descricao) VALUES (?, ?, ?, ?, ?)';
		       
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getQuantidade());
		$stmt->bindValue(3, $p->getValor());
		$stmt->bindValue(4, $p->getData());
		$stmt->bindValue(5, $p->getDescricao());
		$stmt->execute(); 
	}

	public function Read() {
		$sql = 'SELECT * FROM produtos';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}

	public function Update(Produto $p) {
		$sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';                 
		
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getDescricao());
		$stmt->bindValue(3, $p->getId());
		$stmt->execute();		 
	}

	public function Delete($id) {

		$sql = 'DELETE FROM produtos WHERE id = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute(); 

	}
}
?>