<?php 
    require_once('../../class/VerificacaoLogin.php');
    $verifica = new VerificacaoLogin();
    require_once'../../class/header.php'; 
    require_once '../../config.php';
    use Models\Conexao;    
?>
<?php 
    if(isset($_SESSION['mensagem_excluir'])): ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            PRODUTO EXCLUÍDO!
        </div>
<?php unset($_SESSION['mensagem_excluir']); ?>
<?php  
    elseif(isset($_SESSION['mensagem_editar'])): ?> 
        <div class="alert alert-info text-center font-weight-bold" role="alert">
            PRODUTO EDITADO!
        </div>
<?php unset($_SESSION['mensagem_editar']); ?>
<?php endif; ?>

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
                                <td> <?= 'R$ '.number_format($result->valor, 2, ',', ' '); ?>      </td>
                                <td> <?= $result->quantidade; ?> </td>
                                <td> <?= date("d/m/Y", strtotime($result->data));?>       </td>
                                <td> <?= $result->descricao; ?>  </td>
                                <td class="d-flex justify-content-between">
                                    <a class="btn btn-info" href="editarProdutos.php?id=<?= $result->id ?>" >Editar</a>
                                    <a onclick="return confirm('Você tem certeza que deseja excluir?')" class="btn btn-danger" href="../controllers/ProdutoDelete.php?id=<?= $result->id ?>" >Excluir</a>
                                </td>                                
                            </tr>
                <?php   endwhile;?>
            </tbody>
        </table>            
    </div>
</main>
<?php require_once'../../class/footer.php';?>