<?php

namespace Models;

class Conexao {
	private static $pdo;

	public static function getConn() {
			
		if (!isset(self::$pdo)) {
			self::$pdo = new \PDO ('mysql:host=localhost;dbname=estoque;charset=utf8','root','');
        }
		return self::$pdo;				
    }
}
