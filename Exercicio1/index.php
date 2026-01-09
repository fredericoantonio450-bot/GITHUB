<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="CSS/style.css">
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f2f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    form {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        width: 350px;
    }
    div { margin-bottom: 15px; }
    label { 
        display: block; 
        font-weight: bold; 
        margin-bottom: 5px; 
        color: #333;
    }
    input[type="number"], input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 6px;
        box-sizing: border-box; /* Garante que o padding não quebre a largura */
    }
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        border: none;
        border-radius: 6px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
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