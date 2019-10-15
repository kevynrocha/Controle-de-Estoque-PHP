<?php  
  require_once '../../config.php';
  use Models\Conexao; 
                # BLOCO RESPONSÁVEL PELA LISTAGEM DOS PRODUTOS NA TELA
                    $sql = 'SELECT * FROM tbl_produto';
                    $stmt = Conexao::getConn()->prepare($sql);                                
                    $stmt->execute();
                        while ($result = $stmt->fetch(PDO::FETCH_OBJ)):                             
                                $rs = $result->produto;                                             
                        endwhile;

                    var_dump($rs); 
                    