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
    <form action="calcula.php" method="GET">
        <h1>Desempenho Mensal dos Funcionarios</h1>

    <div>
        <div>
            <label for="">Nome funcionário</label>  
            <input type="text" name="nome">   
        </div>
        <br>
        <div>
            <label for="">Atividade entregue pelo Funcionario</label>
            <input type="number" name="desempenho" min="0">
        </div>
        <br>
        <div>
            <label for="">Quantos Atrasos</label>
            <input type="number" name="atraso" min="0">
        </div>

        <br>
          <div>
            <input type="submit" value="Enviar"> <!--Butão-->
        </div>
    </div>

    </form>
</body>
</html>