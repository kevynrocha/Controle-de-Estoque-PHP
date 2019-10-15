<?php  
  require_once '../../config.php';
  use Models\Conexao; 
              /*  # BLOCO RESPONSÁVEL PELA LISTAGEM DOS PRODUTOS NA TELA
                    $sql = 'SELECT * FROM tbl_produto';
                    $stmt = Conexao::getConn()->prepare($sql);                                
                    $stmt->execute();
                        while ($result = $stmt->fetch(PDO::FETCH_OBJ)):                             
                                $rs = $result->produto_nome;                                             
                        endwhile;

                    var_dump($rs)*/

                    
?>
                    <?php  
                    $sql = 'SELECT * FROM tbl_produto';
                    $stmt = Conexao::getConn()->prepare($sql);                                
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_OBJ);
                    echo ('<select>') ;
                    foreach ($results as $result){     
                                    
                        echo('<option>'.$result->produto_nome.'</option>');                   
                    }
                    echo('</select>')  ; 

                    
                    
                    ?>
<hr>
<?php  
$sql = 'SELECT * FROM tbl_produto';
                    $stmt = Conexao::getConn()->prepare($sql);                                
                    $stmt->execute();
                    $results = $stmt->fetch(PDO::FETCH_OBJ);

                    foreach ($results as $result)
                    {
                       echo "$result->produto_nome";
                    }
?>

    
                   
              