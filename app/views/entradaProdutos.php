<?php 
    require_once('../../class/VerificacaoLogin.php');
    $verifica = new VerificacaoLogin();
    require_once('../../class/header.php'); 
    require_once '../../config.php';
    use Models\Conexao; 

    if(isset($_SESSION['mensagem'])): ?>
        <div class="alert alert-success text-center font-weight-bold" role="alert">
            PRODUTO CADASTRADO COM SUCESSO!
        </div>
    <?php unset($_SESSION['mensagem']); ?>
    <?php endif; ?>

<main class="page-content">
    <div class="container-fluid">
        <h2 class="pb-3">Entrada de Produto</h2>
        <form action="../controllers/EntradaCreate.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Produtos</label>
                <?php  
                    $sql = 'SELECT * FROM tbl_produto';
                    $stmt = Conexao::getConn()->prepare($sql);                                
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_OBJ); ?>

                      <select class="custom-select" id="inputGroupSelect01">
                          <option value="">Produtos...</option>
                                       
                    <?php
                    foreach ($results as $result){                                    
                        echo('<option>'.$result->produto_nome.'</option>');                   
                    } ?>                                        
                      </select>                      
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Quantidade</label>
              <input type="number" name="quantidade" class="form-control" min="1" id="inputPassword4" placeholder="Quantidade" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Valor de Entrada</label>
                <input type="number" name="valor" class="form-control" min="1" id="inputAddress" placeholder="Valor de Entrada" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Data de Entrada</label>
                <input type="date" name="data" class="form-control" id="inputAddress2" placeholder="Data" required>
            </div>              
          <button type="submit" class="btn btn-success">     Enviar     </button>
        </form>
    </div>
</main>

<?php require_once('../../class/footer.php');  ?>