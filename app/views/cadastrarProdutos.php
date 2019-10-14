<?php 
    require_once('../../class/VerificacaoLogin.php');
    $verifica = new VerificacaoLogin();
    require_once('../../class/header.php'); 

    if(isset($_SESSION['mensagem'])): ?>
        <div class="alert alert-success text-center font-weight-bold" role="alert">
            PRODUTO CADASTRADO COM SUCESSO!
        </div>
    <?php unset($_SESSION['mensagem']); ?>
    <?php endif; ?>

<main class="page-content">
    <div class="container-fluid">
        <h2 class="pb-3">Cadastrar Produto</h2>
        <form action="../controllers/ProdutoCreate.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Nome do Produto</label>
                    <input type="text"  name="nome" class="form-control" id="inputEmail4"  placeholder="Nome do Produto" required>
                </div>            
                <div class="form-group col-md-12">
                    <label for="descricao">Descrição do Produto</label>
                    <textarea class="form-control" name="descricao" id="descricao" placeholder="Descrição do Produto..." rows="5"></textarea> 
                </div>      
            </div>                         
          <button type="submit" class="btn btn-success">     Enviar     </button>
        </form>
    </div>
</main>

<?php require_once('../../class/footer.php');  ?>