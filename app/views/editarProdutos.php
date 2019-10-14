<?php require_once('../../class/VerificacaoLogin.php'); ?>
<?php require_once '../../config.php'; ?>
<?php $verifica = new VerificacaoLogin(); ?>
<?php require_once('../../class/header.php'); ?>  

<?php

use Models\Conexao;

$id = $_GET['id'];

$sql = 'SELECT * FROM db_produtos WHERE id=:id';
$stmt = Conexao::getConn()->prepare($sql);                                
$stmt->execute([':id' => $id]);
$result = $stmt->fetch(PDO::FETCH_OBJ);

?>

<main class="page-content">
    <div class="container-fluid">
        <h2 class="pb-3">Editar Produto</h2>
        <form action="../controllers/ProdutoUpdate.php?id=<?= $result->id ?>" method="POST">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nomeProduto">Nome do Produto</label>
              <input type="text"  name="nome" class="form-control" id="nomeProduto" 
              value="<?php echo($result->nome);?>" required>
            </div>            
            <div class="form-group col-md-12">
                <label for="descricaoProduto">Descrição do Produto</label>
                <textarea class="form-control" name="descricao" id="descricaoProduto" rows="5"><?php echo($result->descricao);?></textarea>       
            </div>   
          <button type="submit" class="btn btn-success">     Enviar     </button>
        </form>
    </div>
</main>

<?php require_once('../../class/footer.php');  ?>