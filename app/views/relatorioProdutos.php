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
                <th scope="col">    Valor    </th>
                <th scope="col">Quantidade</th>
                <th scope="col">      Data      </th>
                <th scope="col">Descrição</th>
                <th scope="col">            Ações            </th>
                </tr>
            </thead>
            <tbody>  
                
                <?php  
                # BLOCO RESPONSÁVEL PELA LISTAGEM DOS PRODUTOS NA TELA
                    $sql = 'SELECT * FROM db_produtos';
                    $stmt = Conexao::getConn()->prepare($sql);                                
                    $stmt->execute();
                        while ($result = $stmt->fetch(PDO::FETCH_OBJ)): ?>
                            <tr>
                                <td> <?= $result->id; ?>         </td>
                                <td> <?= $result->nome; ?>       </td>
                                <td> <?= $result->valor; ?>      </td>
                                <td> <?= $result->quantidade; ?> </td>
                                <td> <?= $result->data; ?>       </td>
                                <td> <?= $result->descricao; ?>  </td>
                                <td>                                    
                                    <a onclick="return confirm('Você tem certeza que deseja excluir?')" class="btn btn-danger btn-block" href="../controllers/ClassProdutoDelete.php?id=<?= $result->id ?>" >Excluir</a>
                                </td>                                    
                            </tr>
                <?php   endwhile;?>                    
            </tbody>
        </table>            
    </div>
</main>

<?php require_once'../../class/footer.php';?>