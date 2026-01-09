<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="CSS/style.css">
</head>
<body>
    <form action="connection.php" method="POST">

          <div>
            <label for="">Nota1</label>
            <input type="number" name="nota1" min="0" max="10">
          </div>
          
          <div>
            <label for="">Nota2 </label>
            <input type="number" name="nota2" min="0" max="10">
          </div>

          <div>
            <label for="">Nota3</label>
            <input type="number" name="nota3" min="0" max="10">
          </div>

          <div>
            <label for="">Nota4</label>
            <input type="number" name="nota4" min="0" max="10">
          </div>
        
          <div>
            <label for="">Aluno</label>
            <input type="text" name="aluno">
          </div>


        <div>
            <input type="submit" value="Enviar"> <!--Butão-->
        </div>
    </form>
</body>
</html>