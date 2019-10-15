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
        <h2 class="pb-3">Saída de Produto</h2>
        <form action="../controllers/ProdutoCreate.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nome do Produto</label>
              <input type="text"  name="nome" class="form-control" id="inputEmail4"  placeholder="Nome do Produto" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Quantidade</label>
              <input type="number" name="quantidade" class="form-control" min="1" id="inputPassword4" placeholder="Quantidade" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Valor de Custo</label>
                <input type="number" name="valor" class="form-control" min="1" id="inputAddress" placeholder="Valor de Custo" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Data</label>
                <input type="date" name="data" class="form-control" id="inputAddress2" placeholder="Data" required>
            </div>              
          <button type="submit" class="btn btn-success">     Enviar     </button>
        </form>
    </div>
</main>

<?php require_once('../../class/footer.php');  ?>