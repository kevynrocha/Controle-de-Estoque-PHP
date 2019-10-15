<?php  
  require_once '../../config.php';
  use Models\Conexao; 
                # BLOCO RESPONSÁVEL PELA LISTAGEM DOS PRODUTOS NA TELA
                    $sql = 'SELECT * FROM tbl_produto';
                    $stmt = Conexao::getConn()->prepare($sql);                                
                    $stmt->execute();
                        while ($result = $stmt->fetch(PDO::FETCH_OBJ)): ?>
                            <select>
                                <option> <?= $rs = $result->produto; ?></option>
                            </select>
                <?php   endwhile;?>

                <?php     var_dump($rs); ?>

<select class="custom-select" id="inputGroupSelect01">
<option selected>Escolher...</option>
<option value="1">Um</option>
<option value="2">Dois</option>
<option value="3">Três</option>
</select>