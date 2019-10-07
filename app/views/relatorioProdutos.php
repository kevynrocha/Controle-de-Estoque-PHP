<?php require_once'../../class/header.php'; 
      require_once'../models/ClassConexao.php'; 
?>

<main class="page-content">
    <div class="container-fluid">
        <h2 class="pb-3">Relatório</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark text-center">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Valor        </th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data            </th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php						
                
                // Bloco que realiza o papel do Read - recupera os dados e apresenta na tela
                try {                    
                    $sql = 'SELECT * FROM db_produtos';
                    $stmt = new ClassConexao;
                    $stmt = ClassConexao::getConn()->prepare($sql);
                                
                    if ($stmt->execute()) {
                        while ($result = $stmt->fetch(PDO::FETCH_OBJ)) {
                            echo "<tr>";
                            
                                echo "<td>".$result->id."</td>
                                    <td>".$result->nome."</td>
                                    <td>R$ ".$result->valor."</td>
                                    <td>".$result->quantidade."</td>
                                    <td>".$result->data."</td>
                                    <td>".$result->descricao."</td>
                                    <td><center>
                                        <a href=\"?act=upd&id=".$result->id."\">[Alterar]</a>".
                                        "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."
                                        <a href=\"..\controllers\ClassProdutoDelete.php?id=\">[Excluir]</a>
                                    </center></td>";                                    

                            echo "</tr>";
                        }
                            } else {
                                echo "Erro: Não foi possível recuperar os dados do banco de dados";
                            }
                    } catch (PDOException $erro) {
                        echo "Erro: ".$erro->getMessage();
                    }
                    
                    if (isset($_POST["act"]) && $_POST["act"] == "del" && $id != "") {
                        try {
                            $sql = "DELETE FROM db_produtos WHERE id = ?";
                            $stmt = ClassConexao::getConn()->prepare($sql);
                            $stmt->bindParam(1, $id, PDO::PARAM_INT);
                            if ($stmt->execute()) {
                                echo "Registo foi excluído com êxito";
                                $id = null;
                            } else {
                                throw new PDOException("Erro: Não foi possível executar a declaração sql");
                            }
                        } catch (PDOException $erro) {
                            echo "Erro: ".$erro->getMessage();
                        }
                    }                    
                ?>
            </tbody>
        </table>            
    </div>
</main>

<?php require_once('../../class/footer.php');  ?>