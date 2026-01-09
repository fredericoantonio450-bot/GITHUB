<?php
/// Lógica de programação 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica se todos os campos foram enviados
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        $aluno = $_POST["aluno"];

        // Cálculo da média
        $nFinal = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        if ($nFinal >= 7) {
            echo "<p style=color:green; >Aprovado com média: </p>" . $nFinal . "<br><br>";
            echo "Aluno: " . $aluno ;
        } 
        // Recuperação se a nota estiver entre 5 e 6.9
        elseif ($nFinal >= 5 && $nFinal < 7) {
            echo "<p style=color:orange; >Recuperação com média: </p>" . $nFinal . "<br><br>";
            echo "Aluno: " . $aluno;
        } 
        else {
            echo "<p style= color:red; >Reprovado com média: </p>" . $nFinal . "<br><br>";
            echo "Aluno: " . $aluno;
        }
    } else {
        echo "<p style= color:red; >Por favor, preencha todas as notas.</p>";
    }

include_once "backbtn.php";

?>