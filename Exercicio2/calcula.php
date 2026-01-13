<?php 

if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $desempenho = $_GET["desempenho"];
    $atraso = $_GET["atraso"];
    $nome = $_GET["nome"];

        if($desempenho >= 20 && $atraso >= 1 && $atraso <= 1 && $atraso != 0){
            echo "<p style=color:green; >Desempenho Excelente para o funcionário : </p>" . $nome;
        }
        elseif($desempenho > 10 && $desempenho < 19 || $atraso >= 3 && $atraso <= 3 && $atraso != 0){
            echo "<p style=color:blue; >Desempenho Regular para o funcionário para o funcionario: </p>" . $nome;
        }
        else{
            echo "<p style=color:red; >Desempneho Insastifátori para o funcionário: </p>" . $nome;
        }
    
} else {
        echo "<p style= color:red; >Por favor, preencha todas as notas.</p>";
    }

include_once "backbtn.php";
?>