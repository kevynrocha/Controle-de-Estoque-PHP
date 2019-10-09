<?php 
    require_once('../../class/VerificacaoLogin.php');
    $verifica = new VerificacaoLogin();
    require_once('../../class/header.php');
?>
<main class="page-content">
    <div>
		<h1 class="mb-4 mt-3">
            <?php
                if(isset($_SESSION['nome'])){
                    echo "Bem vindo, <strong>".$_SESSION['nome']." </strong>!<br/>";
                }else {
                    header('location: index.php');
                }
            ?>	            
		</h1>
		<h3>Para que serve o controle de estoque?</h3>
				
        <h5 class="text-muted">Muito além de ter um espaço físico organizado, esse controle permite otimizar as tarefas de toda a estrutura da empresa. E assim, trazer inúmeras vantagens e benefícios. Controlar o estoque significa fazer a gestão de uma parte importante dos seus ativos. Além de representar uma estratégia essencial das operações de negócios.</h5>
        
        <h5 class="text-muted">Essas operações podem ser complexas, principalmente se houver mais de um ponto de distribuição. No entanto, deixar de fazê-las ou fazê-las de forma inadequada gerará pequenos erros que podem custar caro.</h5>
        
        
        <h3 class="mt-4">Economia em gastos desnecessários</h3>        
				
        <h5 class="text-muted">Existem mudanças que poderiam ser implementadas para reduzir ou eliminar totalmente os desperdícios de recursos, poupando dinheiro. O planejamento aliado a estratégias que envolvam técnicas e ferramentas certas otimizarão os processos. Assim, fazendo do controle de estoque um fator determinante para o sucesso do negócio.</h5>
        
        <h5 class="text-muted">Sem controle de estoque eficiente, sua empresa pode ter dificuldade em identificar produtos que estão em falta ou baixa quantidade. Isso pode levar a perda de possíveis vendas. Já que, neste caso, seus potenciais clientes poderão procurar outra empresa que possua o produto desejado.</h5>
		
	</div>
</main>

<?php require_once('../../class/footer.php');  ?>