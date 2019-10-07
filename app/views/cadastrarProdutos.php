﻿<?php require_once('../../class/header.php');  ?>

<main class="page-content">
    <div class="container-fluid">
        <h2 class="pb-3">Cadastrar Produtos</h2>
        <form action="../controllers/ClassProdutoCreate.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nome do Produto</label>
              <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Nome do Produto">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Quantidade</label>
              <input type="number" name="quantidade" class="form-control" id="inputPassword4" placeholder="Quantidade">
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Valor de Custo</label>
                <input type="decimal" name="valor" class="form-control" id="inputAddress" placeholder="Valor de Custo">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Data</label>
                <input type="date" name="data" class="form-control" id="inputAddress2" placeholder="Data">
            </div>
            <div class="form-group col-md-12">
                <label for="descricao">Descrição do Produto</label>
                <textarea class="form-control" name="descricao" id="descricao" placeholder="Descrição do Produto..." rows="5"></textarea>       
            </div>   
          <button onclick=" alert('Cadastro realizado com sucesso')" type="submit" class="btn btn-success">     Enviar     </button>
        </form>
    </div>
</main>

<?php require_once('../../class/footer.php');  ?>