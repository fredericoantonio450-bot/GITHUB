<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilização básica do corpo da página */
        body {
            background-color: #f4f4f9; /* Um cinza claro suave */
            display: flex;
            justify-content: center; /* Centraliza o conteúdo horizontalmente */
            align-items: center; /* Centraliza o conteúdo verticalmente */
            height: 100vh; /* Ocupa 100% da altura da viewport */
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fonte moderna */
            color: #333;
        }

        /* Estilização do container do formulário */
        form {
            background-color: #ffffff; /* Fundo branco para destaque */
            padding: 30px;
            border-radius: 10px; /* Cantos arredondados */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Sombra suave */
            width: 100%;
            max-width: 400px; /* Largura máxima do formulário */
        }

        /* Estilização dos blocos de input/label */
        div {
            margin-bottom: 20px; /* Espaçamento entre os campos */
        }

        /* Estilização do label */
        label {
            display: block; /* Garante que o label ocupe sua própria linha */
            margin-bottom: 8px; /* Espaçamento entre o label e o input */
            font-weight: bold; /* Texto em negrito */
            color: #555;
        }

        /* Estilização do campo de input de texto */
        input[type="text"] {
            width: 100%; /* Ocupa 100% da largura do container (com padding/borda inclusos) */
            padding: 12px;
            border: 1px solid #ccc; /* Borda cinza clara */
            border-radius: 5px; /* Cantos arredondados */
            box-sizing: border-box; /* Garante que padding e borda não aumentem a largura total */
            font-size: 16px;
        }

        /* Foco no input */
        input[type="text"]:focus {
            outline: none; /* Remove o contorno padrão do navegador */
            border-color: #007bff; /* Muda a cor da borda ao focar */
        }

        /* Estilização do botão de submit */
        input[type="submit"] {
            background-color: #007bff; /* Cor primária (azul) */
            color: white; /* Texto branco */
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer; /* Muda o cursor para uma mãozinha ao passar por cima */
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease; /* Transição suave na mudança de cor */
        }

        /* Efeito hover no botão */
        input[type="submit"]:hover {
            background-color: #0056b3; /* Cor mais escura ao passar o mouse */
        }
    </style>
</head>
<body>

    <form action="connection.php" method="GET">

        <div>
            <label for="">Adicione seu Nome</label>
            <input type="text" name="nome">
        </div>

        <div>
            <input type="submit" value="Enviar"> <!--Butão-->
        </div>
    </form>
</body>

</html>