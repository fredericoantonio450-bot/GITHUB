<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- O parâmetro v=123 força o navegador a carregar a versão nova -->
    <link rel="stylesheet" href="CSS/style.css?v=1.1">


</head>
<body>
    <form action="calculo.php" method="GET">
        <h1>Desempenho mensal dos funcionarios</h1>

    <div>
        <div>
            <label for="">Nome funcionário</label>  
            <input type="text" name="nome">   
        </div>
        <br>

        <div>
            <label for="">Setor do funcionário</label>  
            <input type="text" name="setor">   
        </div>
        <br>

        <div>
            <label for="">Atividade entregue pelo funcionario</label>
            <input type="number" name="desempenho" min="0">
        </div>
        <br>
        <div>
            <label for="">Quantos atrasos</label>
            <input type="number" name="atraso" min="0">
        </div>

        <br>
          <div>
            <input type="submit" value="Enviar"> <!--Butã   o-->
        </div>
    </div>
    
    </form>
</body>
<footer>
    <p>&copy; 2026 <span class="company-name">Employees Engenharia</span>. Todos os direitos reservados.</p>
</footer>
</html>